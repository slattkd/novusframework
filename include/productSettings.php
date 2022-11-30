<?php
/*
** LIMELIGHT CREDENTIALS
*/
$limelight_api_username     = $site['stickyApi'];
$limelight_api_password     = $site['stickyPass'];
$limelight_api_instance     = $site['stickyUrl'];

/*
** COMPANY INFORMATION
** used for Terms, Privacy, and Contact pages
*/
$company_name                 = $company['name'];

/*
** DEFINE OBJECTS
*/
$step[1]                               = new stdClass();
$step[1]->option[1]                    = new stdClass();
$step[1]->option[2]                    = new stdClass();
$step[1]->option[3]                    = new stdClass();
$step[1]->option[4]                    = new stdClass();
$step[1]->option[5]                    = new stdClass();
$step[1]->option[6]                    = new stdClass();
$step[1]->option[7]                    = new stdClass();
$step[1]->option[8]                    = new stdClass();
$step[1]->option[9]                    = new stdClass();
$step[1]->option[11]                   = new stdClass();
$step[1]->option[12]                   = new stdClass();
$step[1]->option[13]                   = new stdClass();

$step[1]->option[10]                   = new stdClass();
$step[1]->addon[1][1]                  = new stdClass();
$step[1]->addon[1][2]                  = new stdClass();
$step[1]->addon[1][3]                  = new stdClass();
$step[1]->addon[2][1]                  = new stdClass();
$step[1]->addon[3][1]                  = new stdClass();
$step[1]->addon[4][1]                  = new stdClass();
$step[1]->addon[5][1]                  = new stdClass();

$step[2]                               = new stdClass();
$step[2]->option[1]                    = new stdClass();
$step[2]->option[2]                    = new stdClass();
$step[2]->option[3]                    = new stdClass();
$step[2]->option[4]                    = new stdClass();

$step[21]                             = new stdClass();
$step[21]->option[1]                  = new stdClass();
$step[21]->option[2]                  = new stdClass();

$step[3]                             = new stdClass();
$step[3]->option[1]                    = new stdClass();

$step[31]                             = new stdClass();
$step[31]->option[1]                = new stdClass();

$step[4]                             = new stdClass();
$step[4]->option[1]                    = new stdClass();

$step[41]                             = new stdClass();
$step[41]->option[1]                = new stdClass();

$step[5]                             = new stdClass();

$step[6]                             = new stdClass();
$step[6]->option[1]                    = new stdClass();

$step[61]                             = new stdClass();
$step[61]->option[1]                = new stdClass();
/*
** OFFER INFORMATION
*/

// STEP 1
//general core info
$step[1]->name              = "";
$step[1]->phone             = $company['phone'];
$step[1]->email             = "";
// quantity 1x Auto
$step[1]->option[1]->product_price      = 69.95;
$step[1]->option[1]->msrp_price         = 180.00;
$step[1]->option[1]->shipping_price     = 6.95;
$step[1]->option[1]->intl_shipping_price = 14.95;
// quantity 3x Auto
$step[1]->option[2]->product_price      = 179.00;
$step[1]->option[2]->msrp_price         = 540.00;
$step[1]->option[2]->shipping_price     = 6.95;
$step[1]->option[2]->intl_shipping_price = 14.95;
// quantity 3x non Auto
$step[1]->option[3]->product_price      = 179.00;
$step[1]->option[3]->msrp_price         = 540.00;
$step[1]->option[3]->shipping_price     = 6.95;
$step[1]->option[3]->intl_shipping_price = 14.95;
// quantity 1x Auto
$step[1]->option[4]->product_price      = 317.00;
$step[1]->option[4]->msrp_price         = 1080.00;
// add ons - ie. addon[id][qty]
$step[1]->addon[1][1]->product_price      = 14.95;
$step[1]->addon[1][1]->msrp_price         = 29.95;
$step[1]->addon[1][1]->shipping_price     = 0.00;
$step[1]->addon[1][1]->intl_shipping_price = 0.00;

$step[1]->addon[1][2]->product_price      = 29.90;
$step[1]->addon[1][2]->msrp_price         = 59.90;
$step[1]->addon[1][2]->shipping_price     = 0.00;
$step[1]->addon[1][2]->intl_shipping_price = 0.00;

$step[1]->addon[1][3]->product_price      = 44.85;
$step[1]->addon[1][3]->msrp_price         = 89.85;
$step[1]->addon[1][3]->shipping_price     = 0.00;
$step[1]->addon[1][3]->intl_shipping_price = 0.00;

    // STEP 2
    $step[2]->name                      = "5G Male PLUS";
    $step[2]->phone                     = "";
    $step[2]->email                     = "";
    $step[2]->shipping_price            = 0.00;
    $step[2]->insure_price              = 0.00;
    $step[2]->product_price             = 179.69;
    $step[2]->msrp_price                = 419.67;

    // STEP 3
    $step[3]->name                      = "Volume Pill";
    $step[3]->phone                     = "";
    $step[3]->email                     = "";
    $step[3]->shipping_price            = 0.00;
    $step[3]->insure_price              = 0.00;
    $step[3]->option[1]->product_price  = 44.95;
    $step[3]->option[1]->msrp_price     = 90.00;

    // STEP 4
    $step[4]->name                      = "EnduranceRX";
    $step[4]->phone                     = "";
    $step[4]->email                     = "";
    $step[4]->shipping_price            = 0.00;
    $step[4]->insure_price              = 0.00;
    $step[4]->option[1]->product_price  = 44.95;
    $step[4]->option[1]->msrp_price     = 90.00;

/*
** LIMELIGHT API IDS
*/

//5GMALE
$step[1]->option[1]->ll_campaign_id     = 1;
$step[1]->option[1]->ll_product_id        = 4;
$step[1]->option[1]->ll_product_qty        = 1;
$step[1]->option[1]->ll_shipping_id        = 3;
$step[1]->option[1]->ll_intl_shipping_id= 4;
$step[1]->option[1]->ll_product_price     = 69.95;

$step[1]->option[2]->ll_campaign_id     = 1;
$step[1]->option[2]->ll_product_id        = 5;
$step[1]->option[2]->ll_product_qty        = 1;
$step[1]->option[2]->ll_shipping_id        = 5;
$step[1]->option[2]->ll_intl_shipping_id= 4;
$step[1]->option[2]->ll_product_price     = 179.00;

$step[1]->option[3]->ll_campaign_id     = 1;
$step[1]->option[3]->ll_product_id        = 8;
$step[1]->option[3]->ll_product_qty        = 1;
$step[1]->option[3]->ll_shipping_id        = 5;
$step[1]->option[3]->ll_intl_shipping_id= 4;
$step[1]->option[3]->ll_product_price     = 179.00;

$step[1]->option[4]->ll_campaign_id     = 1;
$step[1]->option[4]->ll_product_id        = 9;
$step[1]->option[4]->ll_product_qty        = 1;
$step[1]->option[4]->ll_shipping_id        = 3;
$step[1]->option[4]->ll_intl_shipping_id= 4;
$step[1]->option[4]->ll_product_price     = 317.00;

//BOGO - gm974 and gm975
//v1 - 1x Auto
$step[1]->option[5]->ll_campaign_id     = 1;
$step[1]->option[5]->ll_product_id        = 952;
$step[1]->option[5]->ll_product_qty        = 1;
$step[1]->option[5]->ll_shipping_id        = 3;
$step[1]->option[5]->ll_intl_shipping_id= 4;
$step[1]->option[5]->ll_product_price     = 69.95;

//v1 - 3x
$step[1]->option[6]->ll_campaign_id     = 1;
$step[1]->option[6]->ll_product_id        = 953;
$step[1]->option[6]->ll_product_qty        = 1;
$step[1]->option[6]->ll_shipping_id        = 5;
$step[1]->option[6]->ll_intl_shipping_id= 5;
$step[1]->option[6]->ll_product_price     = 179.00;

//v1 - 3x Auto
$step[1]->option[7]->ll_campaign_id     = 1;
$step[1]->option[7]->ll_product_id        = 954;
$step[1]->option[7]->ll_product_qty        = 1;
$step[1]->option[7]->ll_shipping_id        = 5;
$step[1]->option[7]->ll_intl_shipping_id= 5;
$step[1]->option[7]->ll_product_price     = 179.00;

//v1 - 6x
$step[1]->option[8]->ll_campaign_id     = 1;
$step[1]->option[8]->ll_product_id        = 955;
$step[1]->option[8]->ll_product_qty        = 1;
$step[1]->option[8]->ll_shipping_id        = 5;
$step[1]->option[8]->ll_intl_shipping_id= 5;
$step[1]->option[8]->ll_product_price     = 297.00;

//v2 - 1x Auto
$step[1]->option[9]->ll_campaign_id     = 1;
$step[1]->option[9]->ll_product_id        = 956;
$step[1]->option[9]->ll_product_qty        = 1;
$step[1]->option[9]->ll_shipping_id        = 3;
$step[1]->option[9]->ll_intl_shipping_id= 4;
$step[1]->option[9]->ll_product_price     = 69.95;

//v2 - 3x
$step[1]->option[11]->ll_campaign_id     = 1;
$step[1]->option[11]->ll_product_id        = 957;
$step[1]->option[11]->ll_product_qty        = 1;
$step[1]->option[11]->ll_shipping_id        = 5;
$step[1]->option[11]->ll_intl_shipping_id= 5;
$step[1]->option[11]->ll_product_price     = 179.00;

//v2 - 3x Auto
$step[1]->option[12]->ll_campaign_id     = 1;
$step[1]->option[12]->ll_product_id        = 958;
$step[1]->option[12]->ll_product_qty        = 1;
$step[1]->option[12]->ll_shipping_id        = 5;
$step[1]->option[12]->ll_intl_shipping_id= 5;
$step[1]->option[12]->ll_product_price     = 179.00;

//v2 - 6x
$step[1]->option[13]->ll_campaign_id     = 1;
$step[1]->option[13]->ll_product_id        = 959;
$step[1]->option[13]->ll_product_qty        = 1;
$step[1]->option[13]->ll_shipping_id        = 5;
$step[1]->option[13]->ll_intl_shipping_id= 5;
$step[1]->option[13]->ll_product_price     = 297.00;

$step[1]->option[10]->ll_campaign_id     = 1;
$step[1]->option[10]->ll_product_id        = 451;
$step[1]->option[10]->ll_product_qty        = 1;
$step[1]->option[10]->ll_shipping_id        = 5;
$step[1]->option[10]->ll_intl_shipping_id    =     5;
$step[1]->option[10]->ll_product_price     = 297.00;

$step[1]->addon[1][1]->ll_campaign_id         = 1;
$step[1]->addon[1][1]->ll_product_id        = 81;
$step[1]->addon[1][1]->ll_product_qty        = 1;
$step[1]->addon[1][1]->ll_shipping_id        = 5;
$step[1]->addon[1][1]->ll_intl_shipping_id     = 5;
$step[1]->addon[1][1]->ll_product_price     = 14.95;

$step[1]->addon[1][2]->ll_campaign_id         = 1;
$step[1]->addon[1][2]->ll_product_id        = 82;
$step[1]->addon[1][2]->ll_product_qty        = 1;
$step[1]->addon[1][2]->ll_shipping_id        = 5;
$step[1]->addon[1][2]->ll_intl_shipping_id     = 5;
$step[1]->addon[1][2]->ll_product_price     = 29.90;

$step[1]->addon[1][3]->ll_campaign_id         = 1;
$step[1]->addon[1][3]->ll_product_id        = 83;
$step[1]->addon[1][3]->ll_product_qty        = 1;
$step[1]->addon[1][3]->ll_shipping_id        = 5;
$step[1]->addon[1][3]->ll_intl_shipping_id     = 5;
$step[1]->addon[1][3]->ll_product_price     = 44.85;

$step[1]->addon[2][1]->ll_campaign_id         = 1;
$step[1]->addon[2][1]->ll_product_id        = 84;
$step[1]->addon[2][1]->ll_product_qty        = 1;
$step[1]->addon[2][1]->ll_shipping_id        = 5;
$step[1]->addon[2][1]->ll_intl_shipping_id     = 5;
$step[1]->addon[2][1]->ll_product_price     = 19.95;

//Research Stick Letter
$step[1]->addon[3][1]->ll_campaign_id         = 1;
$step[1]->addon[3][1]->ll_product_id        = 102;
$step[1]->addon[3][1]->ll_product_qty        = 1;
$step[1]->addon[3][1]->ll_shipping_id        = 5;
$step[1]->addon[3][1]->ll_intl_shipping_id     = 5;
$step[1]->addon[3][1]->ll_product_price     = 0;

//Becoming Supernatural
$step[1]->addon[4][1]->ll_campaign_id         = 1;
$step[1]->addon[4][1]->ll_product_id        = 93;
$step[1]->addon[4][1]->ll_product_qty        = 1;
$step[1]->addon[4][1]->ll_shipping_id        = 5;
$step[1]->addon[4][1]->ll_intl_shipping_id     = 5;
$step[1]->addon[4][1]->ll_product_price     = 0;

//Discount Letter
$step[1]->addon[5][1]->ll_campaign_id         = 1;
$step[1]->addon[5][1]->ll_product_id        = 87;
$step[1]->addon[5][1]->ll_product_qty        = 1;
$step[1]->addon[5][1]->ll_shipping_id        = 5;
$step[1]->addon[5][1]->ll_intl_shipping_id     = 5;
$step[1]->addon[5][1]->ll_product_price     = 0;

//Upsell 1 - 5GMale
$step[2]->option[1]->ll_campaign_id         = 1;
$step[2]->option[1]->ll_product_id            = 11;
$step[2]->option[1]->ll_product_qty            = 1;
$step[2]->option[1]->ll_shipping_id            = 5;
$step[2]->option[1]->ll_intl_shipping_id    = 5;
$step[2]->option[1]->ll_product_price         = 179.69;

$step[2]->option[2]->ll_campaign_id         = 1;
$step[2]->option[2]->ll_product_id            = 783;
$step[2]->option[2]->ll_product_qty            = 1;
$step[2]->option[2]->ll_shipping_id            = 5;
$step[2]->option[2]->ll_intl_shipping_id    = 5;
$step[2]->option[2]->ll_product_price         = 197.00;

$step[2]->option[3]->ll_campaign_id         = 1;
$step[2]->option[3]->ll_product_id            = 250;
$step[2]->option[3]->ll_product_qty            = 1;
$step[2]->option[3]->ll_shipping_id            = 5;
$step[2]->option[3]->ll_intl_shipping_id    = 5;
$step[2]->option[3]->ll_product_price         = 297.00;
//popup
$step[2]->option[4]->ll_campaign_id         = 1;
$step[2]->option[4]->ll_product_id            = 461;
$step[2]->option[4]->ll_product_qty            = 1;
$step[2]->option[4]->ll_shipping_id            = 5;
$step[2]->option[4]->ll_intl_shipping_id    = 5;
$step[2]->option[4]->ll_product_price         = 109.00;

//downsell
$step[21]->option[1]->ll_campaign_id         = 1;
$step[21]->option[1]->ll_product_id            = 10;
$step[21]->option[1]->ll_product_qty            = 1;
$step[21]->option[1]->ll_shipping_id            = 5;
$step[21]->option[1]->ll_intl_shipping_id    = 5;
$step[21]->option[1]->ll_product_price         = 49.00;

//downsell VWO Test GM-658
$step[21]->option[2]->ll_campaign_id         = 1;
$step[21]->option[2]->ll_product_id            = 455;
$step[21]->option[2]->ll_product_qty            = 1;
$step[21]->option[2]->ll_shipping_id            = 5;
$step[21]->option[2]->ll_intl_shipping_id    = 5;
$step[21]->option[2]->ll_product_price         = 97.00;

$step[3]->option[1]->ll_campaign_id         = 1;
$step[3]->option[1]->ll_product_id            = 24;
$step[3]->option[1]->ll_product_qty            = 1;
$step[3]->option[1]->ll_shipping_id            = 5;
$step[3]->option[1]->ll_intl_shipping_id    = 5;
$step[3]->option[1]->ll_product_price         = 227.00;


$step[3]->option[2]->ll_campaign_id         = 1;
$step[3]->option[2]->ll_product_id            = 734;
$step[3]->option[2]->ll_product_qty            = 1;
$step[3]->option[2]->ll_shipping_id            = 5;
$step[3]->option[2]->ll_intl_shipping_id    = 5;
$step[3]->option[2]->ll_product_price         = 454.00;

$step[3]->option[3]->ll_campaign_id         = 1;
$step[3]->option[3]->ll_product_id            = 815;
$step[3]->option[3]->ll_product_qty            = 1;
$step[3]->option[3]->ll_shipping_id            = 5;
$step[3]->option[3]->ll_intl_shipping_id    = 5;
$step[3]->option[3]->ll_product_price         = 119.95;

$step[31]->option[1]->ll_campaign_id         = 1;
$step[31]->option[1]->ll_product_id            = 736;
$step[31]->option[1]->ll_product_qty        = 1;
$step[31]->option[1]->ll_shipping_id        = 5;
$step[31]->option[1]->ll_intl_shipping_id    = 5;
$step[31]->option[1]->ll_product_price         = 99.95;

$step[31]->option[2]->ll_campaign_id         = 1;
$step[31]->option[2]->ll_product_id            = 738;
$step[31]->option[2]->ll_product_qty        = 1;
$step[31]->option[2]->ll_shipping_id        = 5;
$step[31]->option[2]->ll_intl_shipping_id    = 5;
$step[31]->option[2]->ll_product_price         = 224.95;

$step[4]->option[1]->ll_campaign_id         = 1;
$step[4]->option[1]->ll_product_id            = 21;
$step[4]->option[1]->ll_product_qty            = 1;
$step[4]->option[1]->ll_shipping_id            = 5;
$step[4]->option[1]->ll_intl_shipping_id    = 5;
$step[4]->option[1]->ll_product_price         = 227.95;

$step[4]->option[2]->ll_campaign_id         = 1;
$step[4]->option[2]->ll_product_id            = 739;
$step[4]->option[2]->ll_product_qty            = 1;
$step[4]->option[2]->ll_shipping_id            = 5;
$step[4]->option[2]->ll_intl_shipping_id    = 5;
$step[4]->option[2]->ll_product_price         = 455.90;

$step[4]->option[3]->ll_campaign_id         = 1;
$step[4]->option[3]->ll_product_id            = 817;
$step[4]->option[3]->ll_product_qty            = 1;
$step[4]->option[3]->ll_shipping_id            = 5;
$step[4]->option[3]->ll_intl_shipping_id    = 5;
$step[4]->option[3]->ll_product_price         = 117.95;

$step[41]->option[1]->ll_campaign_id         = 1;
$step[41]->option[1]->ll_product_id            = 751;
$step[41]->option[1]->ll_product_qty        = 1;
$step[41]->option[1]->ll_shipping_id        = 5;
$step[41]->option[1]->ll_intl_shipping_id    = 5;
$step[41]->option[1]->ll_product_price         = 97.95;

$step[41]->option[2]->ll_campaign_id         = 1;
$step[41]->option[2]->ll_product_id            = 752;
$step[41]->option[2]->ll_product_qty        = 1;
$step[41]->option[2]->ll_shipping_id        = 5;
$step[41]->option[2]->ll_intl_shipping_id    = 5;
$step[41]->option[2]->ll_product_price         = 219.95;

$step[6]->option[1]->ll_campaign_id         = 1;
$step[6]->option[1]->ll_product_id            = 18;
$step[6]->option[1]->ll_product_qty            = 1;
$step[6]->option[1]->ll_shipping_id            = 5;
$step[6]->option[1]->ll_intl_shipping_id    = 5;
$step[6]->option[1]->ll_product_price         = 97.95;

$step[6]->option[2]->ll_campaign_id         = 1;
$step[6]->option[2]->ll_product_id            = 753;
$step[6]->option[2]->ll_product_qty            = 1;
$step[6]->option[2]->ll_shipping_id            = 5;
$step[6]->option[2]->ll_intl_shipping_id    = 5;
$step[6]->option[2]->ll_product_price         = 195.90;

$step[6]->option[3]->ll_campaign_id         = 1;
$step[6]->option[3]->ll_product_id            = 818;
$step[6]->option[3]->ll_product_qty            = 1;
$step[6]->option[3]->ll_shipping_id            = 5;
$step[6]->option[3]->ll_intl_shipping_id    = 5;
$step[6]->option[3]->ll_product_price         = 59.95;

$step[61]->option[1]->ll_campaign_id         = 1;
$step[61]->option[1]->ll_product_id            = 755;
$step[61]->option[1]->ll_product_qty        = 1;
$step[61]->option[1]->ll_shipping_id        = 5;
$step[61]->option[1]->ll_intl_shipping_id    = 5;
$step[61]->option[1]->ll_product_price         = 47.95;

$step[61]->option[2]->ll_campaign_id         = 1;
$step[61]->option[2]->ll_product_id            = 756;
$step[61]->option[2]->ll_product_qty        = 1;
$step[61]->option[2]->ll_shipping_id        = 5;
$step[61]->option[2]->ll_intl_shipping_id    = 5;
$step[61]->option[2]->ll_product_price         = 95.90;
/*
** FUNNEL FLOW SETTINGS
*/
//cart
$step[1]->previous_page         = 'll.php';
$step[1]->current_page          = 'll.php';
$step[1]->next_page             = '/upsells/5gmale/upsell-6-month-supply.php';

//upsell 1 5g 6/12x
$step[2]->previous_page         = 'checkout.php';
$step[2]->current_page          = '/upsells/5gmale/upsell-6-month-supply.php';
$step[2]->next_page             = '/upsells/5gmale/upsell-2-blow-her-away.php';

$step[21]->previous_page        = '/upsells/5gmale/upsell-6-month-supply.php';
$step[21]->current_page         = '/upsells/5gmale/downsell-1.php';
$step[21]->next_page            = '/upsells/5gmale/upsell-2-blow-her-away.php';

//upsell 2 - Volumizer
$step[3]->previous_page         = '/upsells/5gmale/upsell-6-month-supply.php';
$step[3]->current_page          = '/upsells/5gmale/upsell-2-blow-her-away.php';
$step[3]->next_page             = '/upsells/5gmale/upsell-testosterone.php';
    //T3 cannot be shipped to Japan - skip T3 upsell for them
if(@$_SESSION['shippingcountry'] == 'JP'){
    $step[3]->next_page         = '/upsells/5gmale/upsell-final-offer.php';
}

$step[31]->previous_page        = '/upsells/5gmale/upsell-6-month-supply.php';
$step[31]->current_page         = '/upsells/5gmale/downsell-2.php';
$step[31]->next_page            = '/upsells/5gmale/upsell-testosterone.php';
//upsell 3 - Testosterone
$step[4]->previous_page         = '/upsells/5gmale/upsell-2-blow-her-away.php';
$step[4]->current_page          = '/upsells/5gmale/upsell-testosterone.php';
$step[4]->next_page             = '/upsells/5gmale/upsell-final-offer.php';

$step[41]->previous_page        = '/upsells/5gmale/upsell-2-blow-her-away.php';
$step[41]->current_page         = '/upsells/5gmale/downsell-3.php';
$step[41]->next_page            = '/upsells/5gmale/upsell-final-offer.php';

//intermediate page - goes to MA if skipped - Upsell 4 if purchased
$step[5]->previous_page         = '/upsells/5gmale/upsell-testosterone.php';
$step[5]->current_page          = '/upsells/5gmale/upsell-final-offer.php';
$step[5]->next_page             = '/upsells/5gmale/upsell-female-cream.php';

//upsell 4 - XO Gel
$step[6]->previous_page         = '/upsells/5gmale/upsell-final-offer.php';
$step[6]->current_page          = '/upsells/5gmale/upsell-female-cream.php';
$step[6]->next_page             = '/thank-you.php';

$step[61]->previous_page        = '/upsells/5gmale/upsell-final-offer.php';
$step[61]->current_page         = '/upsells/5gmale/downsell-4.php';
$step[61]->next_page            = '/thank-you.php';
