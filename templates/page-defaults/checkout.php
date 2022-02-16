<?php


//$vwovar = '';

$nextlink = '../shared/process/checkform.php' . $querystring;
$nextpage = '/v/dcustom1.php';
$kount_session = str_replace('.', '', microtime(true));
$prodtype = 6;

if (isset($_POST['prodtype'])) {
    $prodtype = $_POST['prodtype'];
} else if (isset($_SESSION['product_id'])) {
    $prodtype = $_SESSION['product_id'];
} else {
    $prodtype = 6;
}

if (($prodtype == 1) || ($prodtype == 674)) {
    $productid = '674';
    $shippingid = '15';
    $baseprice = '49.95';
    $vip = 0;
}
if (($prodtype == '1a') || ($prodtype == 768)) {
    $productid = '768';
    $shippingid = '5';
    $baseprice = '44.95';
    $vip = 1;
}
if (($prodtype == 3) || ($prodtype == 676)) {
    $productid = '676';
    $shippingid = '5';
    $baseprice = '129';
    $vip = 0;
}
if (($prodtype == '3a') || ($prodtype == 769)) {
    $productid = '769';
    $shippingid = '5';
    $baseprice = '116.10';
    $vip = 1;
}
if (($prodtype == 6) || ($prodtype == 679)) {
    $productid = '679';
    $shippingid = '5';
    $baseprice = '197';
    $vip = 0;
}
if (($prodtype == '6a') || ($prodtype == 770)) {
    $productid = '770';
    $shippingid = '5';
    $baseprice = '177.30';
    $vip = 1;
}


$one = [
    'price' => '49.95',
    'ppb' => '49.95',
    'finalprice' => '58.90', // price + 8.95
    'baseprice' => '49.95',
    'pid' => '674',
    'shippingprice' => '8.95',
];

$oneauto = [
    'price' => '44.95',
    'ppb' => '44.95',
    'finalprice' => '44.95',
    'baseprice' => '44.95',
    'pid' => '768',
    'shippingprice' => 'FREE',
];
$three = [
    'price' => '129.00',
    'ppb' => '43.00',
    'baseprice' => '129',
    'pid' => '676',
];
$threeauto = [
    'price' => '116.10',
    'ppb' => '38.70',
    'baseprice' => '116.10',
    'pid' => '769',
];
$six = [
    'price' => '197.00',
    'ppb' => '32.83',
    'baseprice' => '197',
    'pid' => '679',
];
$sixauto = [
    'price' => '177.30',
    'ppb' => '29.55',
    'baseprice' => '117.30',
    'pid' => '770',
];

?>
<html>

<head>
    <?php template('includes/header'); ?>
    <title><?php echo $company['name'] ?> - Checkout</title>
</head>

<body class="bg-blue">
    <?php template('includes/navigation'); ?>
    <section class="max-w-5xl mx-auto bg-white shadow-md mt-6">
        <h1>CHECKOUT PAGE</h1>
        <a href="/up1/">Next Page</a>
        <a href="/coupon/">Previous Page</a>

        <div class="flex flex-wrap">
            <div class="w-full md:w-3/5 p-4">
                <img src="/images/releaseswitchadvanced-6bottle.png" alt="Release Switch Advanced - 6 Bottles">


                <h4 class="panel-title">
                    <!--1 BOTTLE - $69.00 <span class="hidden-xs" style="font-size: 13px;">+ $8.95 S&H </span>-->
                    1 Bottle - $<span class="oneppb"><?php echo $one['ppb']; ?></span> per bottle <span class="hidden-xs oneauto" style="font-size: 13px;">+ $8.95 S&H </span>
                    <span class="oneautoshiptitle" style="display: none;">
                        <span class="label label-dark pull-right hidden-xs hidden-sm"><i class="fa fa-check"></i> FREE SHIPPING!</span>
                    </span>
                </h4>

                <div class="panel-body">
                    <a href="#info" onclick="showProductModal()"><img src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/rs_1.png" class="img-responsive center-block" style='width:35%;'></a>
                    <div class="text-center">
                        <div>One Bottle</div>
                        <h3 class="margin-tb-5">$<span class="oneprice"><?php echo $one['price']; ?></span></h3>
                        <h4 class="margin-tb-5"><span class="oneauto">+ $8.95 S&H</span><span class="onefree" style="display: none;">+ FREE Shipping</span></h4>
                    </div>
                </div>

                <h4 class="panel-title">
                    <!--3 BOTTLES - $177 <span class="label label-primary pull-right hidden-xs hidden-sm"><i class="fa fa-check"></i> FREE SHIPPING!</span>-->
                    3 Bottles - $<span class="threeppb"><?php echo $three['ppb']; ?></span> per bottle<span class="label label-dark pull-right hidden-xs hidden-sm"><i class="fa fa-check"></i> FREE SHIPPING!</span>
                </h4>

                <div class="panel-body">
                    <a href="#info" onclick="showProductModal3()"><img src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/rs_3.png" class="img-responsive center-block"></a>
                    <div class="text-center">
                        <div>Three Bottles</div>
                        <h3 class="margin-tb-5">$<span class="threeprice"><?php echo $three['price']; ?></span></h3>
                        <h5 class="margin-tb-5">+ FREE Shipping<br></h5>
                    </div>
                    <br>
                </div>

                <h4 class="panel-title">

                    <!--6 BOTTLES - $294 <span class="label label-dark pull-right hidden-xs hidden-sm"><i class="fa fa-check"></i> FREE SHIPPING!</span>-->
                    6 Bottles - $<span class="sixppb"><?php echo $six['ppb']; ?></span> per bottle<span class="label label-dark pull-right hidden-xs hidden-sm"><i class="fa fa-check"></i> FREE SHIPPING + BONUSES!</span>

                </h4>

                <div class="panel-body">

                    <!-- <h2 class="text-center" style="margin-bottom: 0;margin-top: 0">
                                                <strong>Today's Special: <br class="hidden-xs"/>Buy 3 Get 2 <span style="color: orangered;">FREE</span></strong></h2> -->

                    <a href="#info" onclick="showProductModal5()"><img src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/rs_6.png" class="img-responsive center-block margin-b-10"></a>
                    <div class="text-center">
                        <div>Six Bottles</div>
                        <h3 class="margin-tb-5">$<span class="sixprice"><?php echo $six['price']; ?></span></h3>
                        <h5 class="margin-tb-5">+ FREE Shipping + Bonuses<br></h5>
                    </div>
                    <br>
                    <center><span style='font-size:30px;'>Plus Get These 7 Gifts <span style='color: red; font-weight: bold;'>FREE!</span></center>
                    <img class="img-fluid" style="padding:22px 0;" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/7bonusebooks.png" alt="Bonuses">
                    <br>
                    <table class="table  table-striped box shadow">
                        <tbody>
                            <tr class="blue-gradient" style="color: #fff;">
                                <th>PRODUCT</th>
                                <th>NORMAL PRICE</th>
                                <th>TODAY'S PRICE</th>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Release Switch Advanced - 6 Bottles - $594.00 </td>
                                <td>$594.00</td>
                                <td>$<span class="sixprice">197.00</span></td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 17 Toxic Household Items to avoid</td>
                                <td>$14.95</td>
                                <td>FREE!</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 37 Most Contaminated Regions</td>
                                <td>$17.00</td>
                                <td>FREE!</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 3-Day Fat Detox</td>
                                <td>$9.95</td>
                                <td>FREE!</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Get Your Fair Share</td>
                                <td>$19.95</td>
                                <td>FREE!</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Proper Cleaning Techniques</td>
                                <td>$19.95</td>
                                <td>FREE!</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Toxin-Free</td>
                                <td>$19.95</td>
                                <td>FREE!</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 7-Day Beach Body</td>
                                <td>$24.95</td>
                                <td>FREE!</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Shipping</td>
                                <td>$8.95</td>
                                <td>FREE!</td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <h4><strong>Total Value:</strong></h4>
                                </td>
                                <td>
                                    <h4><span><s>$729.65</s></span></h4>
                                </td>
                                <td>
                                    <h4><span>$<span class="sixprice"><?php echo $six['price']; ?></span></span></h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <label for="vip" style="display:block;">
                    <div style="margin-top: 30px;border:1px dotted red;padding:10px;">
                        <div style="float: left;height:50px;">
                            <input style="width: 50px; height: 25px;margin-top:-1px;" type="checkbox" name="vip" id="vip" <?php if ($vip == 1) {
                                                                                                                                echo 'checked="checked"';
                                                                                                                            } else {
                                                                                                                            } ?> value="1">
                        </div>
                        <div>
                            <div>Activate 10% VIP Discount For Free Shipping & Easy Monthly Auto-Refill!</div>
                        </div>
                    </div>
                </label>
                <img style="margin-left: -5px; width: 100%;" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/guarantee.png">

                <img style="margin-left: -44px" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/rushblue.png" alt="rush my order" class="rushimg">






            </div>
            <div class="w-full md:w-2/5 p-4">
                <div class="ktemplate_boxRight">

                    <div style="background:#FFFDEF; color:black;" class="kformBox-b">

                        <form method="post" id="kform" class="kform" action="<?php echo $nextlink; ?>">

                            <input type="hidden" name="previous_page" value="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="hidden" name="current_page" value="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="hidden" name="next_page" value="<?php echo $nextpage; ?>">

                            <input type="hidden" name="AFFID" value="<?php echo @$affid; ?>">
                            <input type="hidden" name="AFID" value="<?php echo @$_SESSION['vwovar']; ?>">
                            <input type="hidden" name="C1" value="<?php echo @$c1; ?>">
                            <input type="hidden" name="C2" value="<?php echo @$c2; ?>">
                            <input type="hidden" name="C3" value="<?php echo @$c3; ?>">
                            <input type="hidden" name="utm_source" value="<?php echo @$_GET['utm_source']; ?>">
                            <input type="hidden" name="utm_medium" value="<?php echo @$_GET['utm_medium']; ?>">
                            <input type="hidden" name="utm_campaign" value="<?php echo @$_GET['utm_campaign']; ?>">
                            <input type="hidden" name="utm_term" value="<?php echo @$_GET['utm_term']; ?>">
                            <input type="hidden" name="utm_content" value="<?php echo @$_GET['utm_content']; ?>">

                            <input type="hidden" name="upsellProductIds" id="upsellProductIds" value="">
                            <input type="hidden" name="upsellCount" value="0">

                            <input type="hidden" name="campaign_id" id="campaign_id" value="<?php echo $site['campaign']; ?>">
                            <input type="hidden" name="shipping_id" id="shipping_id" value="<?php echo $shippingid; ?>">
                            <input type="hidden" name="product_id" id="product_id" value="<?php echo $productid; ?>">
                            <input type="hidden" name="product_qty" id="product_qty" value="1">
                            <input type="hidden" name="prospect_id" id="prospect_id" value="<?php echo @$_SESSION['prospect_id']; ?>">
                            <input type="hidden" name="baseprice" id="baseprice" value="<?php echo $baseprice; ?>">

                            <input type="hidden" name="sessionId" value="<?php echo @$kount_session; ?>">
                            <input type="hidden" name="notes" value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                            <input type="hidden" name="billings" id="billings" value="yes">
                            <!--              <form  onsubmit="return false;"> -->
                            <div class="form-top">

                                <img style="width:100%" class="img-fluid" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/order-frm-top.png">
                            </div>
                            <hr>

                            <div style="padding-top:10px" id="formfields">

                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>First Name:</small></div>
                                    <input id="first_name" type="text" value='<?php echo @$post['first_name']; ?>' name="first_name" placeholder="First Name" class="required col-md-7 col-xs-12" data-error-message="Please enter your first name!" />
                                </div>

                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>Last Name:</small></div>
                                    <input id='last_name' type="text" value='<?php echo @$post['last_name']; ?>' name="last_name" placeholder="Last Name" class="required col-md-7 col-xs-12" data-error-message="Please enter your last name!" />
                                </div>

                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>Email:</small></div>
                                    <input id='email' type="text" value='<?php echo @$post['email']; ?>' name="email" placeholder="Email Address" onchange="mailverify()" class="required col-md-7 col-xs-12" data-validate="email" data-error-message="Please enter a valid email id!" />
                                </div>

                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>Phone:</small></div>
                                    <input id='phone' type="text" value='<?php echo @$post['phone']; ?>' name="phone" maxlength="10" placeholder="Phone Number" class="required col-md-7 col-xs-12" data-validate="phone" data-min-length="10" data-max-length="15" data-error-message="Please enter a valid contact number!" />
                                </div>
                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>Shipping Address:</small></div>
                                    <input id='shippingAddress1' value='<?php echo @$post['shippingAddress1']; ?>' type="text" name="shippingAddress1" id="shippingAddress1" placeholder="Your Address" class="required col-md-7 col-xs-12" data-error-message="Please enter your address!" />
                                </div>


                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>Country:</small></div>
                                    <select id='shippingCountry' value='<?php echo @$post['shippingCountry']; ?>' name="shippingCountry" class="required tick_img_postn col-md-7 col-xs-12" data-selected="US" data-error-message="Please select your country!" style="color: #000;">
                                        <option value="US" <?php if (@$post['shippingCountry'] == 'US') {
                                                                echo "selected";
                                                            } ?>>United States</option>
                                    </select>
                                </div>

                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>City:</small></div>
                                    <input id='shippingCity' value='<?php echo @$post['shippingCity']; ?>' type="text" name="shippingCity" id="shippingCity" placeholder="Your City" class="required col-md-7 col-xs-12" data-error-message="Please enter your city!" />
                                </div>

                                <div class="kform_spacer for-state row">
                                    <div class="col-md-3"><small>State:</small></div>
                                    <select name="shippingState" value='<?php echo @$post['shippingState']; ?>' id="shippingState" class="required tick_img_postn col-md-7 col-xs-12" data-error-message="Please select your state!" style="color: #000;">
                                        <option value="">Select State</option>
                                        <?php
                                        foreach ($usStates as $key => $value) :
                                            $selected = '';
                                            if (@$post['shippingState'] == $key) {
                                                $selected = 'selected';
                                            }
                                            echo "<option {$selected} value='{$key}'>{$value}</option>";
                                        endforeach;
                                        ?>
                                    </select>
                                </div>

                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>Zip:</small></div>
                                    <input id='shippingZip' value='<?php echo @$post['shippingZip']; ?>' type="text" name="shippingZip" id="shippingZip" maxlength="5" placeholder="Zip Code" class="required col-md-7 col-xs-12" data-error-message="Please enter a valid zip code!" />
                                </div>

                                <div class="safe-secure-txt">
                                    <img class="lock" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/padlock.png" alt="Secure">


                                    <p style="border: solid 1px #00800030; padding: 3px;"><strong><span style="color:#3c763d">Shopping Is Safe & Secure - Guaranteed</span></strong><br>Secure credit card payment - this is a <br>

                                        secure 256-bit SSL encrypted payment.</p>

                                </div>
                                <div class="kform_spacer kform_checkbox">
                                    <label for="billShipSame" style="display:block;">
                                        Billing Address same as Shipping
                                    </label>
                                    <input type="radio" id='billingSameAsShippingYes' name="billingSameAsShipping" value="yes" <?php if (@$post['billingSameAsShipping'] == 'yes' || !isset($post['billingSameAsShipping'])) {
                                                                                                                                    echo 'checked="checked"';
                                                                                                                                } ?>> YES
                                    <input type="radio" id='billingSameAsShippingNo' name="billingSameAsShipping" value="no" <?php if (@$post['billingSameAsShipping'] == 'no') {
                                                                                                                                    echo 'checked="checked"';
                                                                                                                                } ?>> NO

                                </div>
                                <div class="billing-info" <?php if (@$post['billingSameAsShipping'] == 'yes' || !isset($post['billingSameAsShipping'])) {
                                                                echo 'style="display:none;"';
                                                            } ?>>
                                    <div class="kform_spacer row">
                                        <div class="col-md-3"><small>Bill First:</small></div>
                                        <input id='billingFirstName' value='<?php echo @$post['billingFirstName']; ?>' type="text" name="billingFirstName" class="col-md-7 col-xs-12" placeholder="Billing First Name" data-error-message="Please enter your billing First Name!" />
                                    </div>
                                    <div class="kform_spacer row">
                                        <div class="col-md-3"><small>Bill Last:</small></div>
                                        <input id='billingLastName' value='<?php echo @$post['billingLastName']; ?>' type="text" name="billingLastName" class="col-md-7 col-xs-12" placeholder="Billing Last Name" data-error-message="Please enter your billing Last Name!" />
                                    </div>
                                    <div class="kform_spacer row">
                                        <div class="col-md-3"><small>Bill Address:</small></div>
                                        <input id='billingAddress1' value='<?php echo @$post['billingAddress1']; ?>' type="text" name="billingAddress1" class="col-md-7 col-xs-12" placeholder="Billing Address" data-error-message="Please enter your billing address!" />
                                    </div>

                                    <!--  <div class="kform_spacer">
                    <input name="address2" type="TEXT" placeholder="Address Line 2">
                </div> -->


                                    <div class="kform_spacer row">
                                        <div class="col-md-3"><small>Country:</small></div>
                                        <select name="billingCountry" value='<?php echo @$post['billingCountry']; ?>' class="col-md-7 col-xs-12" data-error-message="Please select your billing Country!" style="color: #000;">
                                            <option value="US" <?php if (@$post['billingCountry'] == 'US') {
                                                                    echo "selected";
                                                                } ?>>United States</option>
                                        </select>
                                    </div>
                                    <div class="kform_spacer row">
                                        <div class="col-md-3"><small>City:</small></div>
                                        <input id='billingCity' value='<?php echo @$post['billingCity']; ?>' type="text" name="billingCity" class="col-md-7 col-xs-12" placeholder="Billing City" data-error-message="Please enter your billing city!" />
                                    </div>

                                    <div class="kform_spacer row">
                                        <div class="col-md-3"><small>State:</small></div>
                                        <select name="billingState" value='<?php echo @$post['billingState']; ?>' id="billingState" class="tick_img_postn col-md-7 col-xs-12" data-error-message="Please select your state!" style="color: #000;">
                                            <option value="">Select State</option>
                                            <?php
                                            foreach ($usStates as $key => $value) :
                                                $selected = '';
                                                if (@$post['billingState'] == $key) {
                                                    $selected = 'selected';
                                                }
                                                echo "<option {$selected} value='{$key}'>{$value}</option>";
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>





                                    <div class="kform_spacer row">
                                        <div class="col-md-3"><small>Zip:</small></div>
                                        <input id='billingZip' value='<?php echo @$post['billingZip']; ?>' type="text" maxlength="5" class="col-md-7 col-xs-12" name="billingZip" placeholder="Billing Zip Code" data-error-message="Please enter a valid billing zip code!" />
                                    </div>
                                </div>

                                <!-- <input type="hidden" name="paySource" value="CREDITCARD"> -->
                                <div class="kform_spacer">

                                    <br>
                                    <div style="display:none">
                                        <div id="kformPaySourceWrap" inputtype="radio"></div>
                                        <div class="kform_spacer" id="kformNewPaymentType">
                                            <!-- <input type="checkbox" name="newPaymentType"> -->
                                            <p>
                                                <label>Select Card Type: </label>
                                                <select name="creditCardType" class="required" data-error-message="Please select valid card type!">
                                                    <option value="">Card Type</option>
                                                </select>
                                            </p>
                                            <span>
                                                New Credit Card
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>Card #:</small></div>
                                    <input id='creditCardNumber' type="text" name="creditCardNumber" placeholder="Credit Card Number" class="required cc-number col-md-7 col-xs-12" maxlength="16" data-error-message="Please enter a valid credit card number!" />
                                </div>


                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>CVV #:</small></div>
                                    <input id='cvv' type="text" name="cvv" class="required col-md-7 col-xs-12" placeholder="Card Security Code" data-validate="cvv" maxlength="4" data-error-message="Please enter a valid CVV code!" />

                                    <!-- <a href="javascript:void(0);" onClick="javascript:openNewWindow('cvv/index.html','modal');" style="color: #fff; font-size: 15px; text-decoration: underline; float:right; padding-top: 10px;">What is this?</a>-->
                                </div>



                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>Exp Month:</small></div>
                                    <select id='expmonth' name="expmonth" class="required tick_img_postn col-md-7 col-xs-12" data-error-message="Please select a valid expiry month!">
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="kform_spacer row">
                                    <div class="col-md-3"><small>Exp Year:</small></div>
                                    <select id='expyear' name="expyear" class="required col-md-7 col-xs-12 tick_img_postn" data-error-message="Please select a valid expiry year!">
                                        <?php
                                        for ($i = date('Y'); $i <= date('Y') + 25; $i++) {
                                            echo '<option value="' . substr($i, -2) . '">' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div id="1order" style="display:none; font-size: 14px!important;" class="price-tag">
                                <p><span class="price-label">Item:</span> Release Switch Advanced - <span id="no_of_btl">1 Bottle</span></p>
                                <p><span class="price-label">Price:</span> $<span id="price"><span class="oneprice"><?php echo $one['price']; ?></span></span></p>
                                <p><span class="price-label">S&H:</span> $<span id="shipping"><span class="oneshippingprice"><?php $one['shippingprice']; ?></span></span></p>
                                <p><span class="price-label">Total:</span> $<span id="tl_price"><span class="onefinalprice"><?php echo $one['finalprice']; ?></span></span></p>
                            </div>
                            <div id="3order" style="display:none; font-size: 14px!important;" class="price-tag">
                                <p><span class="price-label">Item:</span> Release Switch Advanced - <span id="no_of_btl">3 Bottles</span></p>
                                <p><span class="price-label">Price:</span> $<span id="price"><span class="threeprice"><?php echo $three['price']; ?></span></span></p>
                                <p><span class="price-label">S&H:</span><span id="shipping"> FREE</span></p>
                                <p><span class="price-label">Total:</span> $<span id="tl_price"><span class="threeprice"><?php echo $three['price']; ?></span></span></p>
                            </div>
                            <div id="6order" style="display:none; font-size: 14px!important;" class="price-tag">
                                <p><span class="price-label">Item:</span> Release Switch Advanced - <span id="no_of_btl">6 Bottles</span></p>
                                <p><span class="price-label">Price:</span> $<span id="price"><span class="sixprice"><?php echo $six['price']; ?></span></span></p>
                                <p><span class="price-label">S&H:</span><span id="shipping"> FREE</span></p>
                                <p><span class="price-label">Total:</span> $<span id="tl_price"><span class="sixprice"><?php echo $six['price']; ?></span></span></p>
                            </div>


                            <!--  <div class="kform_spacer kform_checkbox" id="termsOfService">
                <input type="checkbox" class="agree-checkbox" data-error-message="You have to agree with the terms in order to proceed!" />
                <label for="confirmTOS_id">
                    I agree to the terms and conditions
                </label>
            </div> -->
                            <br>



                            <input type="submit" value="CLICK TO CONTINUE" class="kform_submitBtn" id="kformSubmit">


                        </form>

                        <div class="callus-mobile">Call us: <?php $company['phone']; ?></div>
                        <div class="securitysection">
                            <img class="pull-right" style="margin: -2px 2px;" width="22px" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/tinylock.png">
                            <p><small><strong>Your Order Will Be Safe &amp; Secure</strong></small></p>
                            <hr style="margin: -16px 0 9px; border: 1px solid #999;">
                            <p class="text-left" style="line-height:1.1; font-size:.7em;"><img class="pull-left" style="margin-right:6px" width="43px" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/ssl-badge.png"><small>Your order is protected by a 256-bit encrypted SSL technology, the same security used by military and government owned data.
                                </small></p>
                            <img width="50px;" border="0" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/ssl-small.png" alt="SSL">
                            <img width="70px" border="0" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/aes.png" alt="AES">
                            <img style="cursor:pointer" class="mfes-trustmark" border="0" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/102.svg" width="120" height="50" title="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="return false;">
                            <span id="siteseal">
                                <img style="cursor:pointer;" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/siteseal_sf_3_h_l_m.gif" onclick="verifySeal();" alt="SSL site seal - click to verify">
                            </span>

                            <img width="55px" border="0" src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/madeinusa-200-min.png" alt="USA">
                            </p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php template('includes/footer'); ?>
    <?php if ($site['debug'] == true) {
        template('debug', 'debug');
    } ?>
</body>

</html>