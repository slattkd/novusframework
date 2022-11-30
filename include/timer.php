
<style>
		.timer {
			display: flex;
			width: 100%;
			justify-content: center;
			color: white;
			font-size: 24px;
			padding: 8px;
			border-top: 2px solid white;
		}
</style>

<div id="countdown" class="timer"></div>

<script>
	var end = new Date('09/14/2022 11:59 PM');
	var countdown = document.getElementById('countdown');

	var _second = 1000;
	var _minute = _second * 60;
	var _hour = _minute * 60;
	var _day = _hour * 24;
	var timer;

	function showRemaining() {
			var now = new Date();
			var distance = end - now;
			if (distance < 0) {

					clearInterval(timer);
					countdown.innerHTML = 'EXPIRED!';

					return;
			}
			var days = Math.floor(distance / _day);
			var hours = Math.floor((distance % _day) / _hour);
			var minutes = Math.floor((distance % _hour) / _minute);
			var seconds = Math.floor((distance % _minute) / _second);

			countdown.innerHTML = `${days} day &#8226; ${hours} hours &#8226; ${minutes} min &#8226; ${seconds} sec`;

	}

    setInterval(showRemaining, 1000);
</script>