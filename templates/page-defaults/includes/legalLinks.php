<!-- include in html as needed -->



<div class="flex w-100">
	<!-- <div class="underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer" onclick="getPage('support-body.php')">Support </div> -->
	<div class="underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer" onclick="getPage('terms-body.php')">Terms & Conditions</div>
	<div class="underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer" onclick="getPage('privacy-body.php')">Privacy Policy</div>
	<div class="underline text-gray-600 hover:text-gray-400 ease-in-out duration-200 visited:text-purple-700 mx-2 cursor-pointer" onclick="getPage('returns-body.php')">Return Policy</div>
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