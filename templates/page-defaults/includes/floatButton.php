/*
	high z-index button (right on desktop, center on mobile) click to scroll to cta
	Requires float_button.js served in the <head>
	php variables:
		$scroll_id (string) = id of the element you want to scroll to and hide button when visible
		$scroll_start (string) = optional - id of the element you want to begin to show the float button wrapper
		$button_text (string) = innerText of float button element
		$top_content (string) = html for anything shown above the button on mobile view
*/

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
		z-index: 100;
		padding: 10px;
		background-color: white;
	}

@media screen and (min-width: 769px) {
	.float-btn-wrapper {
		padding: 14px;
		background-color: transparent;
		align-items: end;
	}
}

.float-btn-wrapper .float-btn {
	font-family: Open Sans Condensed,Impact,sans-serif;
	cursor: pointer;
	font-weight: 900;
	color: #333;
	padding: 16px 20px;
	text-align: center;
	background-color: #006400 !important;
	position: relative;
	z-index: 1;
	display: flex;
	align-items: center;
	justify-content: center;
	box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%), 0 3px 1px -2px rgb(0 0 0 / 20%);
	background-image: linear-gradient(180deg,#f6dda1,#f0c14b) !important;
	border: 1px solid #fff;
	border-color: #a88734 #9c7e31 #846a29;
	border-radius: 5px;
	text-shadow: 1px 1px 0 #f9ffac;
	max-width: 500px;
	max-width: 100%;
}

.float-btn.clickable:hover {
	opacity: .75;
}

@media screen and (min-width: 769px) {
	.float-btn-wrapper .float-btn {
		border-radius: 10px;
		padding: 10px 18px;
		font-size: 34px;
	}
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

	<div type="button" class="float-btn clickable"><?= $button_text; ?></div>

</div>
</section>



<script>
	document.addEventListener('DOMContentLoaded', ()=> {
		const windowHeight = window.innerHeight;
		// flaoting button to hide/show on scroll
		const dynamicElement = document.getElementById('float-button');
		const scrollId = dynamicElement.dataset.scroll;
		const scrollNodes = document.querySelectorAll(`[id=${scrollId}]`);
		const scrollStartId = dynamicElement.dataset.scrollStart;

		if (scrollStartId) {
			dynamicElement.style.display = "none";
		}

		// find visible cta/scroll element
		// for (var i = 0, max = scrollNodes.length; i < max; i++) {
		// 	if (!isHidden(scrollNodes[i])) {
		// 		scrollElement = scrollNodes[i];
		// 		console.log(scrollElement);
		// 	}
		// }

		var scrollElement = null;
		Array.from(scrollNodes).forEach(el => {
			if (!isHidden(el)) {
				scrollElement = el;
			}
		})

		var scrollIsBelowElement = false;
		var buttonShowing = null;
		window.onscroll = ()=> {
			let scrollStartElement = null;
			let belowDiv = false;
			if (scrollStartId) {
				scrollStartElement = document.getElementById(scrollStartId);
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
		dynamicElement.addEventListener('click', function() {
			scrollElement.scrollIntoView({ behavior: 'smooth', block: 'start'});
		})
	})



// observer seems to work better than scroll event and clientRect
// function elementInView(el) {
// 	var rect = el.getBoundingClientRect();
// 	var windowH = window.innerHeight;
// 	var scrollH = window.pageYOffset;
// 	return (rect.top < windowH && rect.top > 0) || rect.bottom > 0 && rect.bottom < windowH;
// }



</script>