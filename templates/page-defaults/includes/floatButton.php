<!--
    Requires float_button.js served in the <head>
    php variables:
    $scroll_id = string; (id of the element you want to scroll to and hide button when visible)
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
  background: #fbba1d;
	/* background: linear-gradient(to bottom,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%); */
	background-image: linear-gradient(180deg,#f6dda1,#f0c14b) !important;
  border: 2px solid #ab3600;
  font-family: 'Oswald', sans-serif;
  /* font-style: italic; */
  font-weight: bold;
  color: #00234c;
	white-space: nowrap;
	border-radius: 6px;
	padding: 2px 12px;
	font-size: 28px;
	width: auto;
	max-width:100vw;
	cursor: pointer;
	transition: 200ms ease-in-out;
	text-align: center;
	text-shadow: 1px 1px 0 #f9ffac;
	box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%), 0 3px 1px -2px rgb(0 0 0 / 20%);
}

.float-btn.clickable:hover {
	filter: brightness(1.15) contrast(0.9);
	opacity: 1;
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
<div id="float-button" class="float-btn-wrapper fade-in-element" data-scroll="<?= $scroll_id; ?>">

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

		// find visible cta/scroll element
		var scrollElement = null;
		// for (var i = 0, max = scrollNodes.length; i < max; i++) {
		// 	if (!isHidden(scrollNodes[i])) {
		// 		scrollElement = scrollNodes[i];
		// 		console.log(scrollElement);
		// 	}
		// }

		console.log(scrollNodes);
		Array.from(scrollNodes).forEach(el => {
			if (!isHidden(el)) {
				scrollElement = el;
				//console.log(scrollElement);
			}
		})

		// display button if element is not in view
		var observer = new IntersectionObserver(function(entries) {
				if(entries[0].intersectionRatio > 0) {
						dynamicElement.style.display = "none";
				} else {
					dynamicElement.style.display = "flex";
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
			//console.log(scrollElement);
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