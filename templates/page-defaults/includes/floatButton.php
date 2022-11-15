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
	display: flex;
	justify-content: center;
	z-index: 1000;
	padding: 20px;
}

.float-btn-wrapper > button {
  background: rgb(255,98,0);
	background: linear-gradient(to bottom,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%);
  border: 2px solid #ab3600;
  border-radius: 10px;
  font-family: 'Oswald', sans-serif;
  font-style: italic;
  font-weight: bold;
  color: #00234c;
	white-space: nowrap;
	padding: 10px 18px;
	font-size: 24px;
	width: auto;
	cursor: pointer;
	transition: 200ms ease-in-out;
	display: none;
}

.float-btn-wrapper > button:hover {
	opacity: 0.8;
}

@media screen and (min-width: 800px) {
	.float-btn-wrapper {
    justify-content: flex-end;
    font-size: 30px;
	}
}

</style>

<!-- requires the scroll to element id passed as $scroll_id -->
<div class="float-btn-wrapper">
	<button id="float-button" data-scroll="<?php echo $scroll_id; ?>"><?php echo $button_text; ?></button>	
</div>


<script>
const windowHeight = window.innerHeight;
// flaoting button to hide/show on scroll
const dynamicElement = document.getElementById('float-button');
const scrollId = dynamicElement.dataset.scroll;
// element to scroll to
const scrollElement = document.getElementById(scrollId);
window.onscroll = ()=> {
	if (elementInView(scrollElement)) {
		dynamicElement.style.display = "none";
	} else {
		dynamicElement.style.display = "flex";
	}

}

// scroll to element via floating button
dynamicElement.addEventListener('click', function() {
	scrollElement.scrollIntoView({ behavior: 'smooth', block: 'start'});
})

function elementInView(el) {
	var rect = el.getBoundingClientRect();
	var windowH = window.innerHeight;
	var scrollH = window.pageYOffset;
	return (rect.top < windowH && rect.top > 0) || rect.bottom > 0 && rect.bottom < windowH;
}
</script>