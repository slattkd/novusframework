<?php

class Maropost {

    public $accountId;
    public $httpStatus = '';
    public $referer = null;
    public $database;
    public $baseUrl;
    public $authToken;
    public $bvKey;

    const BUYER_ROOT = 1131;

    public function __construct($authToken = false, $baseUrl = false, $db = null, $bvKey = null) {
        $this->authToken = $authToken ?: $this->authToken;
        $this->baseUrl = $baseUrl ?: $this->baseUrl;
        $this->bvKey = $bvKey ?: $this->bvKey;
        $this->database = $db;
        
    }
    

    /**
     * CheckEmailValid
     * @param $email Email address to validate via BriteVerify (cURL)
     **/
    public function checkEmailValid($email) {
        $apikey = !empty($options['bvKey']) ? $options['bvKey'] : $this->bvKey;
        $email = urlencode($email);
        $url = "https://bpi.briteverify.com/emails.json?apikey=$apikey&address=$email";

        $curl = new CurlWrapper(); // Assuming CurlWrapper is properly defined elsewhere
        $r = json_decode($curl->get($url));

        // return $r->status != 'invalid';
        return 'briteverify currently inactive, returning valid';
    }

    /**
     * GetContactByContactEmail
     * @param $email
     * @return mixed
     */
    public function getContactByContactEmail($email) {
        return $this->doRequest("GET", "contacts/email", array("contact[email]" => $email));
    }

    /**
     * PostNewContact
     * @param array $contact
     * @return mixed
     */
    public function postNewContact(array $contact) {
        if (empty($contact['contact']['email'])) {
            error_log("ERROR - Cannot add contact without email.");
            return false;
        }

        return $this->doRequest("POST", "contacts", array("contact" => $contact['contact']));
    }

    /**
     * AddContact
     * @param $workflowPage
     * @param $vars
     * @return array
     */
    public function addContact($workflowPage, $vars) {
        $campaignArray = $this->getCampaignArray($workflowPage->email_campaign_name_dropdown);
        $tagArray = $this->getTagArray($workflowPage->email_tag_name_dropdown);

        $results = array();

        foreach ($campaignArray as $accountGroup => $campaigns) {
            $tags = array();

            foreach ($tagArray[$accountGroup] as $tag) {
                $tags[] = array('tagId' => $tag);
            }

            foreach ($campaigns as $campaign) {
                $newContact = array(
                    'email' => $vars['email'],
                    'dayOfCycle' => '0',
                    'tags' => $tags,
                    'campaign' => array(
                        'campaignId' => $campaign
                    ),
                );

                $this->addNameToContactIfSet($newContact, $vars);

                $results[] = $this->doRequest('contacts', 'POST', $newContact);
            }
        }

        return $results;
    }

    /**
     * Log
     * @param $pid
     * @param $email
     * @param $isSuccess
     * @param null $errorDescription
     */
    public function log($pid, $email, $isSuccess, $errorDescription = null) {
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
     * @param $order
     * @param $pages
     */
    public function updateBuyer($order, $pages) {
        $cid = $order->campaign_id;
        $email = $order->email_address;

        $isInSystem = $this->database
            ->query("SELECT COUNT(*) FROM gdc_maro_log WHERE email='$email' AND isSuccess = 1")
            ->fetch(PDO::FETCH_COLUMN);

        if ($isInSystem == '0') return;

        $buyerRoot = $pages->find(self::BUYER_ROOT)[0];

        foreach ($buyerRoot->children() as $buyerPage) {
            if ($buyerPage->limelight_campaign_id == $cid) {
                $this->updateContactTagsByEmail($email, $buyerPage, $buyerPage->id);
            }
        }
    }

    /**
     * UpdateContactTagsByEmail
     * @param $email
     * @param $settings
     * @param $pid
     */
    public function updateContactTagsByEmail($email, $settings, $pid) {
        $tags = $this->getTags($settings->email_tag_name_dropdown);

        foreach ($tags as $account => $tagArray) {
            $contactId = $this->getContactId($email, $account);

            if ($contactId != null) {
                $tagsToEnter = array();

                foreach ($tagArray as $tid) {
                    $tagsToEnter[] = array('tagId' => $tid);
                }

                $r = $this->doCall("contacts/$contactId/tags", 'POST', array(
                    'tags' => $tagsToEnter
                ), $this->getKey($account));
            }
        }
    }

    /**
     * addNameToContactIfSet
     * @param $contact
     * @param $vars
     */
    protected function addNameToContactIfSet(&$contact, $vars) {
        $name = '';

        if (!empty($vars['firstName'])) {
            $name .= $vars['firstName'];
        }

        if (!empty($vars['lastName'])) {
            $name .= ' ' . $vars['lastName'];
        }

        if (!empty($name)) {
            $contact['name'] = $name;
        }
    }

    /**
     * postNewContactIntoList
     * @param array $contact
     * @param bool $subscribe
     * @return bool|mixed
     */
    public function postNewContactIntoList(array $contact, $subscribe = false) {
        if (empty($contact['list_id'])) {
            error_log("428 - Required field: 'list_id' missing on post_new_contact method request.");
            return false;
        }

        if (empty($contact['contact']['email'])) {
            error_log("428 - Required field: 'email' missing on post_new_contact method request.");
            return false;
        }

        $contact['contact']['subscribe'] = $contact['contact']['subscribe'] ?: $subscribe;
        return $this->doRequest("POST", "lists/" . $contact['list_id'] . "/contacts", array("contact" => $contact['contact']));
    }

    /**
     * postNewRecordIntoRelTable
     * @param array $contact
     * @return bool|mixed
     */
    public function postNewRecordIntoRelTable(array $contact) {
        if (empty($contact['record']['first_name'])) {
            error_log("426 - Required field: 'first_name' missing on post_new_contact method request.");
            return "426 - Required field: 'first_name' missing on post_new_contact method request.";
        }

        if (empty($contact['record']['last_name'])) {
            error_log("427 - Required field: 'last_name' missing on post_new_contact method request.");
            return "427 - Required field: 'last_name' missing on post_new_contact method request.";
        }

        if (empty($contact['record']['email'])) {
            error_log("428 - Required field: 'email' missing on post_new_contact method request.");
            return "428 - Required field: 'email' missing on post_new_contact method request.";
        }

        $records = $this->getRelTableData("GET", "", $contact);
        
        $records = json_decode(json_encode($records), true);

        $key = array_search($contact['record']['email'], array_column($records['records'], 'email'));

        if ($key !== false) {
            // update RT Record
            return $this->doRequest("PUT", "/update", $contact);
        } else {
            // create new RT record
            return $this->doRequest("POST", "/create", $contact);
        }
    }

    protected function getRelTableData($httpMethod, $endpoint, $dataArray) {
        $authToken = !empty($options['authToken']) ? $options['authToken'] : $this->authToken;
        $baseUrl = !empty($options['baseUrl']) ? $options['baseUrl'] : $this->baseUrl;

        $url = $baseUrl . $endpoint . ".json" . "?auth_token=" . $authToken;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $output = curl_exec($ch);
        curl_close($ch);
        $decoded = json_decode($output);

        return $decoded;
    }

    protected function doRequest($httpMethod, $endpoint, $dataArray) {
        $authToken = !empty($options['authToken']) ? $options['authToken'] : $this->authToken;
        $baseUrl = !empty($options['baseUrl']) ? $options['baseUrl'] : $this->baseUrl;

        $url = $baseUrl . $endpoint . ".json";

        if (isset($dataArray['record'])) {
            $url .= "?auth_token=" . $authToken;
        }

        $ch = curl_init();
        $dataArray['auth_token'] = $authToken;
        $json = json_encode($dataArray);

        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
        curl_setopt($ch, CURLOPT_TIMEOUT, '90');
        curl_setopt($ch, CURLOPT_URL, $url);

        switch ($httpMethod) {
            case "POST":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                break;
            case "GET":
                $newURL = json_encode($dataArray);
                $newURL = str_replace("{", "", $newURL);
                $newURL = str_replace("}", "", $newURL);
                $newURL = str_replace(":", "=", $newURL);
                $newURL = str_replace(",", "&", $newURL);
                $newURL = str_replace('"', "", $newURL);
                $url = $newURL !== 'null' && !empty($newURL) ? $url . "?" . $newURL : $url;

                curl_setopt($ch, CURLOPT_URL, $url);
                $json = json_encode(array('authToken' => $authToken));
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                break;
            case "PUT":
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
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

    // Helper function to get campaign array
    protected function getCampaignArray($campaignDropdown) {
        $campaignArray = array();

        foreach ($campaignDropdown as $item) {
            if (!isset($campaignArray[$item->parent()->title])) {
                $campaignArray[$item->parent()->title] = array();
            }

            $campaignArray[$item->parent()->title][] = $item->value;
        }

        return $campaignArray;
    }

    // Helper function to get tag array
    protected function getTagArray($tagDropdown) {
        $tagArray = array();

        foreach ($tagDropdown as $item) {
            if (!isset($tagArray[$item->parent()->title])) {
                $tagArray[$item->parent()->title] = array();
            }

            $tagArray[$item->parent()->title][] = $item->value;
        }

        return $tagArray;
    }

    // Helper function to get tags
    protected function getTags($tagDropdown) {
        $tags = array();

        foreach ($tagDropdown as $tagPage) {
            $account = $tagPage->parent()->title;

            if (!isset($tags[$account])) {
                $tags[$account] = array();
            }

            $tags[$account][] = $tagPage->value;
        }

        return $tags;
    }

    // Helper function to get contact ID
    protected function getContactId($email, $account) {
        // Implement as needed
        return null;
    }

    // Helper function to get key
    protected function getKey($account) {
        // Implement as needed
        return null;
    }

    // Helper function to make a call
    protected function doCall($url, $method, $data, $key) {
        // Implement as needed
        return null;
    }
}