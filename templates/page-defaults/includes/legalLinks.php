<?PHP 
 /*
 inline list of legal links terms, privacy, returns which open in basicModal component
	- shows legal links within a modal 
	$show_aff - show affiliate signup at the end of the link list
 */
 ?>

 <div id="legalLinks" class="flex w-100 text-xs justify-center">
	<div class="terms flex flex-nowrap underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer" onclick="getPage('terms.php')">Terms <span class="hidden md:block">&nbsp;& Conditions</span></div>
	<div class="privacy underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer" onclick="getPage('privacy.php')">Privacy Policy</div>
	<div class="contact underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer" onclick="getPage('returns.php')">Return Policy</div>
	<?php if (isset($show_aff) && $show_aff): ?>
		<div class="affiliate underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer">
		<a href="https://partners.pineapple.co/affiliate-signup/" class="no-link-style" target="_blank">Affiliate Signup</a>
		</div>
	<?php endif; ?>
</div>


<?php
		// declare modal variables (requires basic_modal.js)
		$modal_id = 'legalLinkModal';
		$modal_title = "";
		$max_width = '4xl';
		$height = 'full';
		$modal_body = '
		<div id="legal-link-copy"></div>
		';
		$modal_footer = '';
    modal("includes/basicModal", $modal_id, $modal_title, $modal_body, $modal_footer, $max_width, $height);
	?>

<script>
	const legalModalBody = document.getElementById('legal-link-copy');
	var htmlElement = '';
	var pageData =  null;
	var isLoading =  false;
	function getPage(pageName) {
		isLoading = true;
		fetch(`/${pageName}`)
		.then(response => response.text())
		.then((data) => {
				isLoading = false;
				if (data && data !== '') {
				pageData = data;
				pageData = pageData.replace(/<head>[\s\S]*?<\/head>/, '<head>' + '<\/head>');
				window.modalHandler('legalLinkModal', true);
				legalModalBody.innerHTML = pageData;
				document.getElementById('nav').style.display = 'none';
				document.getElementById('footer').style.display = 'none';
			} else {
				legalModalBody.innerHTML = '<div class="text-center">Content is unavailable at this time.</div>';
			}
		})
		.catch(err => console.error(err));
	}
</script>