<?php
error_reporting(0);
session_start();

require_once('./ll/settings.php');
include('./ll/Limelight.php');
//include( $_SERVER['DOCUMENT_ROOT'] . '/step/process.php' ); 

$orderid = $_SESSION['step_1_orderId'];
$cid = $_SESSION['customerID'];

include('./ll2/llapi.php');

$complete = array(
	'method' => 'order_find',
	'start_date' => date('m/d/Y',  mktime(0, 0, 0, date("m"), date("d") - 1, date("Y"))),
	'end_date' => date('m/d/Y'),
	'criteria' => 'customer_id=' . (int)$cid . ',approved',
	'return_type' => 'order_view',
	'search_type' => 'all'
);

//Allow more than one campaign to display
$complete['campaign_id'] = 1;
$results = api(2, $complete);

$items = json_decode($results['data'], true);
$info = $items[$orderid];


$mailer = 0;

if ($_SESSION['affid'] == 1798) {
	$mailer = 1;
}

$firedl = 0;

if ($_SESSION['step_6']) {
	$firedl = 1;
	if ($_SESSION['step_6'] == 1) {
		$uporderid = $_SESSION['step_6_orderId'];
		$uporderamt = '97.95';
		$upsku = 18;
		$upname = 'GTMUpsell4';
	}
	if ($_SESSION['step_6'] == 2) {
		$uporderid = $_SESSION['step_6_orderId'];
		$uporderamt = '195.90';
		$upsku = 753;
		$upname = 'GTMUpsell4';
	}
}

if ($_SESSION['step_61']) {
	$firedl = 1;
	if ($_SESSION['step_61'] == 1) {
		$uporderid = $_SESSION['step_61_orderId'];
		$uporderamt = '47.95';
		$upsku = 755;
		$upname = 'GTMDownsell4';
	}
	if ($_SESSION['step_61'] == 2) {
		$uporderid = $_SESSION['step_61_orderId'];
		$uporderamt = '95.90';
		$upsku = 756;
		$upname = 'GTMDownsell4';
	}
}

$_SESSION['vwovar'] = 'gm937master';
?>
<!DOCTYPE>
<html>

<head>
	<?php if ($firedl) : ?>
		<script>
			window.dataLayer = window.dataLayer || [];
			window.dataLayer.push({
				'event': '<?php echo $upname; ?>',
				'transactionId': '<?php echo $uporderid; ?>',
				'transactionTotal': '<?php echo $uporderamt; ?>',
				'transactionAffiliation': '<?php echo @$_SESSION['affid']; ?>',
				'transactionProducts': [{
					'sku': '<?php echo $upsku; ?>',
					'name': '<?php echo $upname; ?>',
					'price': '<?php echo $uporderamt; ?>',
					'quantity': 1
				}]
			});
		</script>
	<?php endif; ?>

	<title>Thank You!</title>
	<meta name="viewport" content="width=device-width" />

	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|Cardo:400,400italic,700' rel='stylesheet' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700,800" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="../../shared/css/base.css" rel="stylesheet">

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-T7RRXPJ');
	</script>
	<!-- End Google Tag Manager -->


	<style>
		h1 {
			text-align: center;
			margin-top: 0 !important;
		}

		a {
			color: #e44848;
		}

		a:hover {
			color: #e45548;
		}

		#customer {
			margin-top: 5px;
		}

		#order {
			padding-top: 20px;
		}

		.right {
			text-align: right;
		}

		#total {
			font-size: 1.14em;
			font-weight: 400;
			padding-top: 5px;
			padding-left: 30px;
		}

		.shiptax {
			font-weight: 400 !important;
		}

		#totalVal {
			font-size: 1.71429em;
			font-weight: 500;
		}

		ul {
			text-align: right;
		}

		ul li {
			display: inline-block;
			padding-right: 20px;
			font-size: 12px;
			list-style: none;
		}

		@media(max-width: 798px) {
			#footer-menu {
				margin-top: 10px;
			}

			ul {
				text-align: left;
				margin-top: 10px;
			}

			h1 {
				font-size: 25px;
				margin-bottom: 15px;
			}

			.slpage {
				padding-top: 0 !important
			}
		}
	</style>
	<!-- TruConversion for 5gmale.com -->
	<script type="text/javascript">
		var _tip = _tip || [];
		(function(d, s, id) {
			var js, tjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {
				return;
			}
			js = d.createElement(s);
			js.id = id;
			js.async = true;
			js.src = d.location.protocol + '//app.truconversion.com/ti-js/8480/80413.js';
			tjs.parentNode.insertBefore(js, tjs);
		}(document, 'script', 'ti-js'));
	</script>
	<!-- Start Visual Website Optimizer Asynchronous Code -->
	<script type='text/javascript'>
		var _vwo_code = (function() {
			var account_id = 2887,
				settings_tolerance = 4000,
				library_tolerance = 5000,
				use_existing_jquery = false,
				/* DO NOT EDIT BELOW THIS LINE */
				f = false,
				d = document;
			return {
				use_existing_jquery: function() {
					return use_existing_jquery;
				},
				library_tolerance: function() {
					return library_tolerance;
				},
				finish: function() {
					if (!f) {
						f = true;
						var a = d.getElementById('_vis_opt_path_hides');
						if (a) a.parentNode.removeChild(a);
					}
				},
				finished: function() {
					return f;
				},
				load: function(a) {
					var b = d.createElement('script');
					b.src = a;
					b.type = 'text/javascript';
					b.innerText;
					b.onerror = function() {
						_vwo_code.finish();
					};
					d.getElementsByTagName('head')[0].appendChild(b);
				},
				init: function() {
					settings_timer = setTimeout('_vwo_code.finish()', settings_tolerance);
					var a = d.createElement('style'),
						b = 'body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',
						h = d.getElementsByTagName('head')[0];
					a.setAttribute('id', '_vis_opt_path_hides');
					a.setAttribute('type', 'text/css');
					if (a.styleSheet) a.styleSheet.cssText = b;
					else a.appendChild(d.createTextNode(b));
					h.appendChild(a);
					this.load('//dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' + encodeURIComponent(d.URL) + '&r=' + Math.random());
					return settings_timer;
				}
			};
		}());
		_vwo_settings_timer = _vwo_code.init();
	</script>
	<!-- End Visual Website Optimizer Asynchronous Code -->

	<style>
		.question:before {
			content: '?';
			display: inline-block;
			font-family: sans-serif;
			font-weight: 500;
			text-align: center;
			width: 1.1rem;
			height: 1.075rem;
			font-size: 14px;
			line-height: 1.8ex;
			border-radius: 1rem;
			margin-right: 0;
			padding: 3px;
			color: white;
			background: black;
			text-decoration: none;
		}

		.checkmark {
		display:inline-block;
		background: gray;
    width: 22px;
    height:22px;
    border-radius:50%;
    -ms-transform: rotate(45deg) scale(1.5); /* IE 9 */
    -webkit-transform: rotate(45deg) scale(1.5); /* Chrome, Safari, Opera */
    transform: rotate(45deg) scale(1.5);
	}

	.checkmark:before{
		content: "";
		position: absolute;
		width: 2px;
		height: 11px;
		background-color: #fff;
		left: 12px;
		top: 4px;
	}

	.checkmark:after{
		content: "";
		position: absolute;
		width: 7px;
		height: 2px;
		background-color: #fff;
		left: 7px;
		top: 13px;
	}
	
	</style>
</head>

<body class="bg-gray-100">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7RRXPJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="container-vsl mx-auto py-8" style="max-width: 680px">
		<div class="content">
			<div class="flex justify-center mb-3">
				<h1 class="text-gray-500 text-2xl font-bold"><span class="checkmark mr-2"aria-hidden="true"></span> Thank you <?php echo $_SESSION["firstname"]; ?>!</h1>
			</div>

			<div class="flex w-full flex-col bg-white p-4 px-6 border rounded border-black">
				<div class="flex">
					<h3 id="customer" class="text-2xl font-bold mb-4">Customer information</h3>
				</div>
				<div class="columns-3xs ...">
					<div class="flex flex-col p-3">
						<h4 class=" text-xl font-semibold">Shipping Address</h4>
						<?php echo $items[$orderid]['shipping_street_address']; ?><br>
						<?php if ($items[$orderid]['shipping_street_address2'] != "") {
							echo $items[$orderid]['shipping_street_address2'] . '<br>' . '';
						} ?>
						<?php echo $items[$orderid]['shipping_city']; ?>,
						<?php echo $items[$orderid]['shipping_state']; ?>
						<?php echo $items[$orderid]['shipping_postcode']; ?>
					</div>
					<div class="flex flex-col p-3">
						<h4 class=" text-xl font-semibold">Billing Address</h4>
						<?php echo $items[$orderid]['billing_street_address']; ?><br>
						<?php if ($items[$orderid]['billing_street_address2'] != "") {
							echo $items[$orderid]['billing_street_address2'] . '<br>' . '';
						} ?>
						<?php echo $items[$orderid]['billing_city']; ?>,
						<?php echo $items[$orderid]['billing_state']; ?>
						<?php echo $items[$orderid]['billing_postcode']; ?>
					</div>
				</div>
				<div class="flex-flex-col px-3">
					<h4 class=" text-xl font-semibold">Email</h4>
					<p><?php echo $_SESSION['email']; ?></p>
				</div>
				<div class="flex">
					<h3 id="customer" class="text-2xl font-bold mb-4 pt-6">Order Information</h3>
				</div>

				<?php
					$total_tax = 0;
					$grand_total = 0;
					$blocked_skus = array('gift_stick', 'trial_stick', 'research_letter', 'discount_stick', '5gm_auto_stick', '5GPC', '5GPCnoship');

				if (isset($items)) {

					foreach ($items as $o => $item) {

						if (!in_array($item['products[0][sku]'], $blocked_skus)) {

							$stuff .= "nsOrderItems.push('{{" . $item['products[0][name]'] . "}}{{" . $item['products[0]price'] . "}}{{1}}');\n";
							echo '
							<div class="flex justify-between px-3 py-2">
							<div class="text">' . $item['products[0][name]'] . '</div>
							<div class="price text-right">$ ' . money_format('%i', $item['products[0][price]']) . '</div>
							</div>
							';

							$total_sum += $item['products[0][price]'];
							$total_tax += (float)$item['order_sales_tax_amount'];
							$grand_total += (float)$item['order_total'];
						}
					}
				}

				if ($items[$orderid]['shipping_country'] == 'US') {
					if ($mailer) {
						$shippingTotal1 = 7.95;
					} else {
						$shippingTotal1 = 6.95;
					}
				} else {
					$shippingTotal1 = 14.95;
				}

				if (isset($_SESSION['pid'])) {
					if ($_SESSION['pid'] != '4' && $_SESSION['pid'] != 1 && $_SESSION['pid'] != 952 && $_SESSION['pid'] != 956) {
						$shippingTotal1 = 0.00;
					}
				}

				if ($_SESSION['add1'] == 1) { echo '
					<div class="flex justify-between px-3 py-2">
					<div class="text">Super Lube</div>
					<div class="price text-right">$14.95</div>
					</div>
					';
					$total_sum += 14.95;
				}

				if ($_SESSION['add1'] == 2) { echo '
					<div class="flex justify-between px-3 py-2">
					<div class="text">Super Lube</div>
					<div class="price text-right">$29.90</div>
					</div>
					';
					$total_sum += 29.90;
				}

				if ($_SESSION['add1'] == 3) { echo '
					<div class="flex justify-between px-3 py-2">
					<div class="text">Super Lube</div>
					<div class="price text-right">$44.85</div>
					</div>
					';
					$total_sum += 44.85;
				}

				if ($_SESSION['add2'] == 1) { echo '
					<div class="flex justify-between px-3 py-2">
					<div class="text">Sex Positions</div>
					<div class="price text-right">$19.95</div>
					</div>
					';
					$total_sum += 19.95;
				}

				$ordertotal = $total_sum + $shippingTotal1 + (float)$total_tax;
				?>

				<div class="flex justify-between px-3 py-2">
					<div class="text">Shipping</div>
					<div class="price text-right">$ <?php echo money_format('%i', $shippingTotal1); ?></div>
				</div>
				<div class="flex justify-between px-3 py-2">
					<div class="text">Sales Tax</div>
					<div class="price text-right">$ <?php echo money_format('%i', $total_tax); ?></div>
				</div>
				<div class="flex justify-between px-3 py-2">
					<div class="text">Total</div>
					<div class="price text-right ext-xl font-semibold">$ <?php echo money_format('%i', $grand_total); ?></div>
				</div>

				<div class="w-full py-2 text-right"><a href="http://members.supernaturalman.com/login" target="_blank">Click Here to Members Area</a></div>
				<div class="w-full pb-2 text-right">Username:  <?php echo $_SESSION['email']; ?></div>

				<div class="flex justify-center py-7 text-3xl text-red-600 text-center font-semibold hidden">
				<h2>"Last Chance! Add These Recommended Products For Free Shipping!"</h2>
				</div>

				<section>
					<div class="flex w-full flex-col">
						<div class="title text-center text-red-600 font-semibold font-2xl">
						</div>
					</div>	
				</section>

				<div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-11 sans uppercase"> Supernatural Man LLC </div>
			</div>
		</div>

		<div class="flex flex-wrap justify-center md:justify-between items-center mt-3">
			<div class="w-full md:w-auto text-center">
				<span class="question text-sm" aria-hidden="true"></span> 
				Need help? <a class="clickable underline" href="mailto:support@5gmale.com" target="_blank">Contact us</a>
			</div>
			<div class="flex">
					<div class="px-2 text-sm underline"><a href="http://www.5gmale.com/policy/refund_policy.php" target="_blank">Refund Policy</a></div>
					<div class="px-2 text-sm underline"><a href="http://www.5gmale.com/policy/privacy_policy.php" target="_blank">Privacy Policy</a></div>
					<div class="px-2 text-sm underline"><a href="http://www.5gmale.com/policy/terms_of_service.php" target="_blank">Terms of service</a></div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>

</html>