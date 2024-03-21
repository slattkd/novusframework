<!-- include in html as needed -->



<div class="flex w-100 text-xs legallinks">
	<div class="terms flex flex-nowrap underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer" onclick="getPage('terms-body.php')">Terms <span class="hidden md:block">&nbsp;& Conditions</span></div>
	<div class="privacy underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer" onclick="getPage('privacy-body.php')">Privacy Policy</div>
	<div class="return underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer" onclick="getPage('returns-body.php')">Return Policy</div>
	<a class="text-gray-600 text-xs" href="/support" target="_blank"><div class="support flex underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer">Support</div></a>
	<a class="text-gray-600 text-xs" href="https://partners.pineapple.co/affiliate-signup/" target="_blank"><div class="afflink flex underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer">Affiliate Signup</div></a>

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
				window.modalHandler('legalLinkModal', true);
				legalModalBody.innerHTML = pageData;
			} else {
				legalModalBody.innerHTML = '<div class="text-center">Content is unavailable at this time.</div>';
			}
		})
	}
</script>