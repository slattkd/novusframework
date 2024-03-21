<!-- 
	high z-index button (right on desktop, center on mobile) click to scroll to cta
	Requires float_button.js served in the <head>
	php variables:
		$scroll_id (string) = id of the element you want to scroll to and hide button when visible
		$scroll_start (string) = optional - id of the element you want to begin to show the float button wrapper
		$button_text (string) = innerText of float button element
		$top_content (string) = html for anything shown above the button on mobile view
 -->

 <style>
  .float-btn-wrapper {
		position: fixed;
		bottom: 0;
		right: 0;
		left:0;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		z-index: 50;
		padding: 10px;
		background-color: white;
		box-shadow: 0px -1px 40px 10px rgba(0,0,0,0.15);
	}

@media screen and (min-width: 769px) {
	.float-btn-wrapper {
		padding: 14px;
		background-color: transparent;
		align-items: end;
		box-shadow:unset;
		left:unset;
	}
}

.float-btn-wrapper .float-btn {
	font-family: Open Sans Condensed,Impact,sans-serif;
	cursor: pointer;
	font-weight: 900;
	color: #333;
	text-align: center;
	background-color: #006400 !important;
	position: relative;
	z-index: 1;
	display: flex;
	align-items: center;
	justify-content: center;
	box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%), 0 3px 1px -2px rgb(0 0 0 / 20%);
	background-image: linear-gradient(180deg,#f6dda1,#f0c14b);
	border: 1px solid #fff;
	border-color: #a88734 #9c7e31 #846a29;
	border-radius: 5px;
	text-shadow: 1px 1px 0 #f9ffac;
	max-width: 500px;
	max-width: 100%;
	font-size: 1.5em;
	padding: 5px 25px;
		min-width: 33%;
}

@media screen and (min-width: 769px) {
	.float-btn-wrapper .float-btn {
		border-radius: 10px;
		font-size: 1.1em;
		padding: 8px 25px;
		min-width: unset;
	}
}

.float-btn.clickable:hover {
	opacity: .75;
}

@media screen and (min-width: 769px) {
	.float-btn-wrapper {
    font-size: 30px;
	}
}

.top-content {
	display: flex;
	justify-content: center;
	width: 100%;
	text-align: center;
	padding: 10px 0;
}

</style>

<section>
<div id="float-button" class="float-btn-wrapper fade-in-element" data-scroll="<?= $scroll_id; ?>" data-scroll-start="<?= $scroll_start; ?>">
	<div class="flex flex-col justify-center">
	<?php echo htmlspecialchars_decode($top_content); ?>
	</div>
	<button type="button" class="float-btn clickable"><?= $button_text; ?></button>
</div>
</section>
<script>
	document.addEventListener('DOMContentLoaded', ()=> {
		const windowHeight = window.innerHeight;
		// flaoting button to hide/show on scroll
		const dynamicElement = document.getElementById('float-button');
		const floatHeight = dynamicElement.clientHeight;
		const scrollId = dynamicElement.dataset.scroll;
		const scrollStart = dynamicElement.dataset.scrollStart;
		const scrollNodes = document.querySelectorAll(`[id^="${scrollId}"]`);
		const scrollStartId = scrollStart;
		const bodyBottomPad = window.getComputedStyle(document.body, null).getPropertyValue('padding-bottom');
		document.body.style.paddingBottom = parseInt(bodyBottomPad.replace('px', ''), 10) + floatHeight + 'px';
		var scrollElement = null;
		const scrollToElements = Array.from(scrollNodes);
		scrollToElements.forEach(el => {
			if (!isHidden(el)) {
				scrollElement = el;
			}
		})

		if (!scrollStartId) {
			dynamicElement.style.display = 'none';
		}

		scrollElement = !scrollElement ? scrollNodes[0] : scrollElement;
		var scrollIsBelowElement = false;
		var buttonShowing = null;
		window.onscroll = ()=> {
			let scrollStartElement = scrollStartId ? document.getElementById(scrollStartId) : null;
			let belowDiv = false;
			if (scrollStartElement) {
				scrollIsBelowElement = window.pageYOffset > window.pageYOffset + scrollStartElement.getBoundingClientRect().top;
				var elDisplay = dynamicElement.style.display;
				const shouldShow = !elementInView && (scrollStartId && scrollIsBelowElement) || !scrollStartId;
				const shouldHide = elementInView || (scrollStartId && !scrollIsBelowElement);
				if (shouldShow) {
					showButton(true);
				}
				if (shouldHide) {
					showButton(false);
				}
			} else {
				showButton(!elementInView);
			}
		}

		function showButton(show) {
			if ((show && buttonShowing == true) || (!show && !buttonShowing)) {
				return;
			}
			dynamicElement.style.display = show ? 'flex' : 'none';
			buttonShowing = show;
		}

		var elementInView = false;
		// display button if element is not in view
		var observer = new IntersectionObserver(function(entries) {
				if(entries[0].intersectionRatio > 0) {
						elementInView = true;
				} else {
						elementInView = false;
				}
		});

		if (scrollElement) {
			observer.observe(scrollElement);
		}

		function isHidden(el) {
			var style = window.getComputedStyle(el);
			return ((style.display == 'none') || (style.visibility == 'hidden'))
		}

		// scroll to element via floating button
		document.querySelector('.float-btn').addEventListener('click', function() {
			scrollElement.scrollIntoView({ behavior: 'smooth', block: 'start'});
		})
		
	})
</script>