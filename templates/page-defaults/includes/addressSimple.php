<!--
    Requires google maps/places api
    php variables:
    $id_address = string (unique identifier for address section);
		-current acceptable values are 'billing' and 'shipping'
		$simple = boolean 0/1 turn on disabled fields after select
		-this allows only the street addresses to be adjusted
    other:
		data attribute 'data-valid' relays boolean value for pristine.js custom validation
		data-attributes on each input store the selected values from gmaps
-->

<style>
	.pac-logo:after {
		text-align:left !important;
		background-position: left !important;
		filter: saturate(0.25);
		margin:5px 10px;
	}

	input.search-bg {
		background-image: url("data:image/svg+xml,%3Csvg enable-background='new 0 0 512 512' height='112px' version='1.1' viewBox='0 0 512 512' width='112px' xml:space='preserve' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Layer_6'%3E%3Cpath d='M228,68.67c-68.48,0-124,55.51-124,124c0,68.48,55.52,124,124,124c68.48,0,124-55.52,124-124 C352,124.18,296.48,68.67,228,68.67z M228,283.27c-50.04,0-90.6-40.569-90.6-90.6c0-50.04,40.56-90.6,90.6-90.6 s90.6,40.56,90.6,90.6C318.6,242.7,278.04,283.27,228,283.27z' fill='%23e3e3e3'/%3E%3Cg%3E%3Cpath d='M392.791,414.308c6.094,9.157,4.118,21.283-4.391,26.944c-8.509,5.662-20.457,2.803-26.551-6.355 l-88.641-133.204c-6.094-9.158-4.118-21.283,4.391-26.944c8.51-5.662,20.458-2.803,26.552,6.355L392.791,414.308z' fill='%23e3e3e3'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
		background-repeat: no-repeat;
		background-position: 99% 52%;
		background-size: 28px;
		padding-right: 40px;
	}

	.pristine-error {
		transition:all 300ms ease-in-out;
		animation: fadeIn 300ms;
		border: 1px solid transparent;
	}

	.text-red-700.pristine-error.mismatch {
		color: #bbbbbb;
	}

	.has-danger > .pristine-error + .pristine-error.mismatch {
		opacity: 0;
	}

  input {
    border: 1 px solid #e5e7eb !important;
  }
  input.disabled {
    background: #f0f0f0 !important;
    filter: none !important;
  }
</style>

<section id="<?= $id_address; ?>" class="w-full">

  <div class="flex flex-col w-full mx-auto">

		<!-- primary GMAPS input -->
    <div class="input w-full mb-1">
			<div class="w-full z-10 invisible">
      	<label for="location-<?= $id_address; ?>" class="mt-1 text-sm text-gray-600 hidden md:block z-10 rounded">Search Your Address</label>
			</div>
      <!-- <div class="mt-1 flex"> -->
        <input type="text" name="location-<?= $id_address; ?>" id="location-<?= $id_address; ?>"
          class="google-location relative p-2 w-full text-lg border border-gray-300 w-full text-gray-500 rounded-l border-e-0 search-bg"
					placeholder="Search Your Address"
          data-valid="false"
					autocomplete="xx"
					style="display:inline-flex; width:calc(100% - 65px)"
					>
        <button class="rounded-r border border-gray-300 px-3 text-gray-500 hover:bg-gray-100 hover:text-black border-l-0"
          type="button" id="<?= $id_address; ?>-btn-clear"
					style="height:46px;float:right;"
					>
          Clear
        </button>
      <!-- </div> -->
    </div>

		<div class="input w-full mb-1 ">
			<div class="w-full z-10 invisible">
      	<label for="state" class="text-sm text-gray-600 hidden md:block rounded">Country</label>
			</div>
      
        <input type="text" name="<?= $id_address; ?>Country" id="<?= $id_address; ?>Country" 
          class="border border-gray-400 rounded w-full p-2  disabled"
					placeholder="Country"
					data-country="US"
					value="US"
					autocomplete="xx"
          required="required">

    </div>

		<div class="input w-full mb-0 ">
			<div class="w-full z-10 invisible">
      	<label for="street" class="text-sm text-gray-600 hidden md:block rounded">Address 1</label>
			</div>
      
        <input type="text" name="<?= $id_address; ?>Address1" id="<?= $id_address; ?>Address1" 
          class="border border-gray-400 rounded w-full p-2  disabled"
					placeholder="Address 1"
					data-address="<?php echo @$_SESSION['billingAddress1']; ?>"
					value="<?php echo @$_SESSION['billingAddress1']; ?>"
					autocomplete="xx"
          required="required">

    </div>

		<div class="input w-full mb-0 ">
			<div class="w-full z-10 invisible">
      	<label for="<?= $id_address; ?>street2" class="text-sm text-gray-600 hidden md:block rounded">Address 2</label>
			</div>
      
        <input type="text" name="<?= $id_address; ?>Address2" id="<?= $id_address; ?>Address2"
          class="border border-gray-400 rounded w-full p-2"
					placeholder="Address 2"
					autocomplete="xx"
          >

    </div>

		
			<div class="flex flex-wrap md:flex-nowrap w-full ">
			<div class="input w-full md:w-1/3 mb-0 pr-2">
				<div class="w-full z-10 invisible">
					<label for="city" class="text-sm text-gray-600 hidden md:block rounded">City</label>
				</div>
				<input type="text" name="<?= $id_address; ?>City" id="<?= $id_address; ?>City" 
					class="border border-gray-400 rounded w-full p-2  disabled"
					placeholder="City"
					data-city="<?php echo @$_SESSION['billingCity']; ?>"
					value="<?php echo @$_SESSION['billingCity']; ?>"
					autocomplete="xx"
					required="required">
			</div>
			

			
			<div class="input w-full md:w-1/3 mb-0 px-2">
				<div class="w-full z-10 invisible">
					<label for="state" class="text-sm text-gray-600 hidden md:block rounded">State</label>
				</div>
				<input type="text" name="<?= $id_address; ?>State" id="<?= $id_address; ?>State" 
					class="border border-gray-400 rounded w-full p-2  disabled"
					placeholder="State"
					data-state="<?php echo @$_SESSION['billingState']; ?>"
					value="<?php echo @$_SESSION['billingState']; ?>"
					autocomplete="xx"
					required="required">
			</div>
			

			
			<div class="input w-full md:w-1/3 mb-0 pl-2">
				<div class="w-full z-10 invisible">
					<label for="postal" class="text-sm text-gray-600 hidden md:block rounded">Postal Code</label>
				</div>
				<input type="text" name="<?= $id_address; ?>Zip" id="<?= $id_address; ?>Zip" 
					class="border border-gray-400 rounded w-full p-2  disabled"
					placeholder="Postal Code"
					data-zip="<?php echo @$_SESSION['billingZip']; ?>"
					value="<?php echo @$_SESSION['billingZip']; ?>"
					autocomplete="xx"
					required="required">
			</div>
			</div>



  </div>

</section>
<script>

const addressInput<?= $id_address; ?> = document.getElementById(`location-<?= $id_address; ?>`);
const clearBtn<?= $id_address; ?> = document.getElementById('<?= $id_address; ?>-btn-clear');
const <?= $id_address; ?>Inputs = document.querySelectorAll('section#<?= $id_address; ?> input');

clearBtn<?= $id_address; ?>.addEventListener('click', () => {
  // clear inputs
	addressInput<?= $id_address; ?>.value = '';
	updateClearInput('<?= $id_address; ?>Country', 'US');
	document.getElementById(`<?= $id_address; ?>Country`).setAttribute("data-country", 'US');
	updateClearInput('<?= $id_address; ?>State', '');
	document.getElementById(`<?= $id_address; ?>State`).setAttribute("data-state", '');
	updateClearInput('<?= $id_address; ?>City', '');
	document.getElementById(`<?= $id_address; ?>City`).setAttribute("data-city", '');
	updateClearInput('<?= $id_address; ?>Address1', '');
	document.getElementById(`<?= $id_address; ?>Address1`).setAttribute("data-address", '');
	updateClearInput('<?= $id_address; ?>Zip', '');
	document.getElementById(`<?= $id_address; ?>Zip`).setAttribute("data-zip", '');
  
	addressInput<?= $id_address; ?>.dataset.valid = false;
})

function updateClearInput(id, val) {
  inp = document.getElementById(`${id}`);
  inp.value = val ? val.trim() : '';
	inp.pristine.errors = [];
  inp.dispatchEvent(new Event('input'));
}

</script>