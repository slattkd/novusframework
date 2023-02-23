<!-- 
shows vidalytic videos with overlay option (may need update with 1:1 ratio videos)
various company information can be adjusted in config.php
 -->

<footer id="footer" class="bg-zinc-700">
	<div class="container container-md mx-auto py-6">
		<div class="grid grid-cols-2 gap-10 sm:gap-8 sm:grid-cols-4 ml-6">
			<div>
				<h3 class="mb-2 w-full text-sm font-semibold text-gray-900 uppercase dark:text-white"><?php echo $company['name']; ?>.</h3>
				<ul class="w-full">
					<li class="mb-1 text-gray-600 dark:text-gray-400 text-sm">
							<?= $company['name']; ?> 
							<?= $company['about']; ?> 
					</li>
				</ul>
			</div>
			<div class="flex md:justify-center">
				<div class="flex flex-col">
					<h3 class="mb-2 w-full text-sm font-semibold text-gray-900 uppercase dark:text-white">Products</h3>
					<ul class="">
						<li class="mb-1">
							<div class="flex items-center">
								<img src="//<?= $_SERVER['HTTP_HOST'];?><?= $company['featuredProductImage']; ?>" alt="5G Male product bottle" width="45px">
								<a href="/product"  class="ml-2 text-gray-400 hover:text-white hover:underline transition duration-150 ease-in-out cursor-pointer"><?= $company['featuredProduct']; ?></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="flex sm:justify-center">
				<div class="flex flex-col">
					<h3 class="mb-2 text-sm font-semibold text-gray-900 uppercase dark:text-white">Quick Links</h3>
					<ul>
						<li class="mb-1">
							<a href="/index"
								class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">Home</a>
						</li>
						<li class="mb-1">
							<a href="//<?= $_SERVER['HTTP_HOST'];?>/product"
								class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">Shop</a>
						</li>
						<li class="mb-1">
							<a href="//<?= $_SERVER['HTTP_HOST'];?>/about"
								class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">About</a>
						</li>
						<li class="mb-1">
							<a href="//<?= $_SERVER['HTTP_HOST'];?>/support"
								class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">Support</a>
						</li>
						<!-- <li class="mb-1">
							<a href="/checkout/cart" target="_blank"
								class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">Cart</a>
						</li> -->

					</ul>
				</div>
			</div>
			<div class="flex md:justify-center">
				<div class="flex flex-col -ml-3 md:ml-0">
					<a href="#" target="_blank" class="flex items-center">
						<img src="//<?= $_SERVER['HTTP_HOST'];?>/images/gmp.png" class="mr-4" alt="Supernatural Logo" style="max-width: 150px">
					</a>
				</div>
			</div>
		</div>
	</div>
	<hr class="container container-md my-12 border-gray-500 mx-auto">
	<div class="w-full bg-zinc-800 pb-4">
		<div class="flex flex-wrap items-center justify-center md:justify-between container container-md mx-auto text-sm p-2">
			<div class="flex items-center mt-4 space-x-6 justify-center">
				<a href="/support" class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">CONTACT US</a>
				<a href="#" class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd"
							d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
							clip-rule="evenodd"></path>
					</svg>
				</a>
				<a href="#" class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd"
							d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
							clip-rule="evenodd"></path>
					</svg>
				</a>
				<a href="#" class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer ">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path
							d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
						</path>
					</svg>
				</a>
			</div>

			<div class="flex items-center mt-4 space-x-6 justify-center">
				<!-- <a href="javascript:void(0)" onclick="loadLegal('terms.php')" class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">
					TERMS & CONDITIONS
				</a>
				<a href="javascript:void(0)" onclick="loadLegal('privacy.php')" class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">
					PRIVACY POLICY
				</a>
				<a href="javascript:void(0)" onclick="loadLegal('returns.php')" class="text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer">
					RETURN POLICY
        </a> -->
        <?php legalLinks("includes/legalLinks");?>
			</div>

		</div>
	</div>
	<div class="bg-black">
		<p class="text-center text-gray-500 text-sm py-3">Copyright &copy; <?php echo date('Y'); ?> Supernatural Man, LLC </p>
	</div>
</footer>

<?php
		// declare modal variables (requires basic_modal.js)
		$modal_id = 'legalLinkModal';
		$max_width = '5xl';
		$height = '4/5';
		$modal_title = "";
		$modal_body = '
		<div id="legal-copy"></div>
		';
		$modal_footer = '';
    modal('includes/basicModal', $modal_id, $modal_title, $modal_body, $modal_footer, $max_width, $height);
	?>

<script>
	const modalBody = document.getElementById('legal-copy');
	var htmlElement = '';

	// TODO: split out into modal component instead of placing on pages
	function loadLegal(url) {
		window.modalHandler('legalLinkModal', true);

		var request = new XMLHttpRequest();
		request.onreadystatechange = (evt) => {
			if (request.readyState === 4) {
				htmlElement = evt.srcElement.response;
				if (htmlElement && htmlElement.length > 0) {
					modalBody.innerHTML = htmlElement;
				} else {
					modalBody.innerHTML = '<div class="text-center">Content is unavailable at this time.</div>';
				}
			}
		}

		request.open('GET', url, true),
		request.send('');
	}

</script>