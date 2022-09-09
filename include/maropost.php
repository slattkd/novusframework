<?php

//require_once('CurlWrapper.php');

/**
 * GetResponse API
 * Abstractions for common email api tasks
 * https://developer-prod.limelightcrm.com/
 */
class Maropost {

    public $accountId;
    public $httpStatus = '';
    public $referer = null;

    public $baseUrl = 'https://api.maropost.com/accounts/2161/';
    public $authToken = 'UrxhFyQYEmFCLGT8oVTthbUfmJeXzGsKrcgjK4ctQtzZEUT0BdBTrg';

    const BV_KEY = '13a21375-7289-470e-b7f0-23b400a6f0c5';

    const BUYER_ROOT = 1131; // page id for buyer root

    public function __Construct( $authToken = FALSE, $baseUrl = FALSE, $db ) {
        $this->authToken = $authToken ?: $this->authToken;
        $this->baseUrl    = $baseUrl ?: $this->baseUrl;
        $this->database = $db;
    }

    /**
    * CheckEmailValid
    * @param $email Email address to validate via BriteVerify (cURL)
    **/
    public function CheckEmailValid($email) {
        $email = urlencode($email);
        $apikey = SELF::BV_KEY;
        $url = "https://bpi.briteverify.com/emails.json?apikey=$apikey&address=$email";

        $curl = new CurlWrapper();
        $r = json_decode($curl->get($url));

        // return true if the email is valid
        return $r->status != 'invalid';
    }

    //To search a contact with email and get all the details of the contact
    /**
     * @param $email
     *
     * @return mixed
     */
    function getContactByContactEmail ($email) {
        return $this->doRequest( "GET", "contacts/email", array("contact[email]"=>$email));
    }

    /**
     * @param $contact
     *
     * @return mixed
     */
    function postNewContact (array $contact) {
        if ( empty( $contact['contact']['email'] ) ) {
            error_log( "ERROR - Cannot add contact without email." );
            return FALSE;
        }

        return $this->doRequest( "POST", "contacts", array("contact" => $contact['contact']));
    }

    /**
    * AddContact
    * @param $settings email_entry_settings that contains the accounts => campaigns/tags to create
    * @param $vars parameters from the client's submission, such as email and name
    **/
    public function AddContact($workflowPage, $vars) {

        $campaignArray = array();
        foreach($workflowPage->email_campaign_name_dropdown as $item) {
            if(!isset($campaignArray[$item->parent()->title]))
                $campaignArray[$item->parent()->title] = array();

            $campaignArray[$item->parent()->title][] = $item->value;
        }

        $tagArray = array();
        foreach($workflowPage->email_tag_name_dropdown as $item) {
            if(!isset($tagArray[$item->parent()->title]))
                $tagArray[$item->parent()->title] = array();

            $tagArray[$item->parent()->title][] = $item->value;
        }

        foreach($campaignArray as $accountGroup => $campaigns) {
            //$campaignIds = implode(',', $campaigns);
            $tags = array();
            foreach($tagArray[$accountGroup] as $tag) {
                $tags[] = array('tagId' => $tag);
            }

            foreach($campaigns as $campaign) {
                $newContact = array(
                    'email' => $vars['email'],
                    'dayOfCycle' => '0',
                    'tags' => $tags,
                    'campaign' => array(
                        'campaignId' => $campaign
                    ),
                );

                $this->addNameToContactIfSet($newContact, $vars);

                // use ->title to obtain the option text of a dropdown vs. the index value
                $results[] = $this->doRequest('contacts', 'POST', $newContact);
            }
        }
        return $results;
    }

    public function Log($pid, $email, $isSuccess, $errorDescription = null) {
        $email = $this->database->escapeStr($email);
        $referer = $this->database->escapeStr($this->referer);
        $errorDescription = $this->database->escapeStr($errorDescription);

        $successInt = ($isSuccess ? 1 : 0);
        $now = new DateTime();
        $now->setTimezone(new DateTimeZone('America/New_York'));

        $this->database->query("INSERT INTO gdc_maro_log (email, time_stamp, referer, isSuccess, errorDescription, workflowId)
        VALUES ('$email', '{$now->format('Y-m-d H:i:s')}', '$referer', $successInt, '$errorDescription', $pid);");
    }

    /**
    * UpdateBuyer
    * Either adds one or more tags to an existing contact OR creates a contact with
    * tags and campaigns based on the buyer page email workflow settings
    * @param $order the limelight order object, to retrieve the user's email and campaign
    * @param $pages processwire pages object
    */
    public function UpdateBuyer($order, $pages) {

        $cid = $order->campaign_id;
        $mainProduct = $order->main_product_id;
        $email = $order->email_address;

        $isInSystem = $this->database
            ->query("SELECT COUNT(*) FROM gdc_maro_log WHERE email='$email' AND isSuccess = 1")
            ->fetch(PDO::FETCH_COLUMN);

        // do nothing for buyers that aren't in my system (legacies) or that have already failed GR360's blacklists or BriteVerify
        if($isInSystem == '0') return;

        // find the root of all buyer pages so I can easily iterate through them
        $buyerRoot = $pages->find(self::BUYER_ROOT)[0];

        // find the correct 'buyer' page and use those settings to mark the user as a buyer
        foreach($buyerRoot->children() as $buyerPage) {
            if($buyerPage->limelight_campaign_id == $cid) {
                $this->UpdateContactTagsByEmail($email, $buyerPage, $buyerPage->id);
            }
        }
    }

    /*
    * If the contact exists, ADD the tags specified in the settings
    * Otherwise, CREATE the user and sub them to all campaigns/tags specified in the settings
    * @param $email email address of user
    * @param $settings email workflow settings repeater from the page
    */
    public function UpdateContactTagsByEmail($email, $settings, $pid) {
        $tags = array();
        foreach($settings->email_tag_name_dropdown as $tagPage) {
            $account = $tagPage->parent()->title;

            if(!isset($tags[$account])) $tags[$account] = array();
            $tags[$account][] = $tagPage->value;
        }

        foreach($tags as $account => $tagArray) {
            $contactId = $this->getContactId($email, $account);
            if($contactId != null) {
                $tagsToEnter = array();
                foreach($tagArray as $tid)
                    $tagsToEnter[] = array('tagId' => $tid);

                // Update tags - adds a new tag but does not remove old ones
                $r = $this->doCall("contacts/$contactId/tags", 'POST', array(
                    'tags' => $tagsToEnter
                ), $this->getKey($account));
            }
        }
    }


    protected function addNameToContactIfSet(&$contact, $vars) {
        $name = '';
        if(!empty($vars['firstName']))
            $name .= $vars['firstName'];
        if(!empty($vars['lastName']))
            $name .= ' ' . $vars['lastName'];

        if(!empty($name))
            $contact['name'] = $name;
    }

    /**
     * @param array $contact
     * @param bool $subscribe
     *
     * @return bool|mixed
     */
    function post_new_contact_into_list (array $contact, $subscribe = false) {
        if ( empty( $contact['list_id'] ) ) {
            error_log( "428 - Required field: 'list_id' missing on post_new_contact method request." );
            return FALSE;
        }
        if ( empty( $contact['contact']['email'] ) ) {
            error_log( "428 - Required field: 'email' missing on post_new_contact method request." );
            return FALSE;
        }
        $contact['contact']['subscribe'] = $contact['contact']['subscribe'] ? : $subscribe;
        //$contact['contact']['remove-from-dnm'] = $subscribe ? true : $subscribe;  //remove-from-dnm does not seem to work.
        return $this->doRequest( "POST", "lists/".$contact['list_id']."/contacts", array("contact" => $contact['contact']));
    }


    protected function doRequest($httpMethod, $endpoint, $dataArray)
    {
        $authToken = ! empty( $options['authToken'] ) ? $options['authToken'] : $this->authToken;
        $baseUrl    = ! empty( $options['baseUrl'] ) ? $options['baseUrl'] : $this->baseUrl;

        $url = $baseUrl . $endpoint . ".json";
        $ch = curl_init();
        $dataArray['auth_token'] = $authToken;
        $json = json_encode($dataArray);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch,CURLOPT_ENCODING, 'gzip,deflate');
        curl_setopt($ch,CURLOPT_TIMEOUT, '90');
        curl_setopt($ch, CURLOPT_URL, $url);
        switch ($httpMethod) {
            case "POST":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json );
                break;
            case "GET":
                $newURL = json_encode( $dataArray );
                $newURL = str_replace( "{", "", $newURL );
                $newURL = str_replace( "}", "", $newURL );
                $newURL = str_replace( ":", "=", $newURL );
                $newURL = str_replace( ",", "&", $newURL );
                $newURL = str_replace( '"', "", $newURL );
                $url    = $newURL !== 'null' && ! empty( $newURL ) ? $url . "?" . $newURL : $url;
                // echo $url . "<br/>";
                curl_setopt($ch, CURLOPT_URL, $url);
                $json = json_encode( array( 'authToken' => $authToken ) );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                break;
            case "PUT":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                break;
            case "DELETE":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
            default:
                curl_close($ch);
                return false;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Accept: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $output = curl_exec($ch);
        curl_close($ch);
        $decoded = json_decode($output);
        return $decoded;
    }

}