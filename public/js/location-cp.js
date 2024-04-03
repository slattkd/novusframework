// requires head script
// if(typeof window.google !== 'object' && typeof window.google?.maps !== 'object') {
// 	const newScript = document.createElement("script");
// 	document.head.appendChild(newScript);
// 	newScript.src = 'https://maps.googleapis.com/maps/api/js?key=' + '<  ?  = $site['gmapsApi']; ?>' + '&libraries=places&callback=initAutocomplete';
// 	// &callback=initAutocomplete
// }


const billingSection = document.getElementById('billing');
const billingInput = document.getElementById(`location-billing`);
const shippingSection = document.getElementById('shipping');
const shippingInput = document.getElementById(`location-shipping`);
var autocompleteBilling = null;
var autocompleteShipping = null;

function initAutoComplete() {

  autocompleteBilling = new google.maps.places.Autocomplete(billingInput, {
    fields: ["address_components"],
    types: ["address"]
  })

  autocompleteShipping = new google.maps.places.Autocomplete(shippingInput, {
    fields: ["address_components"],
    types: ["address"]
  })

  autocompleteBilling.addListener("place_changed", function() {
    billingValue = autocompleteBilling.getPlace();
    formatAddress(billingValue, 'billing');
  });

  autocompleteShipping.addListener("place_changed", function() {
    shippingValue = autocompleteShipping.getPlace();
    formatAddress(shippingValue, 'shipping');
  });
  
}

function formatAddress(data, type, event) {
  let place = data;
  let addressType = type;
  const zip = getFieldData(data.address_components, 'postal_code')[0];
  const zipCode = getFieldData(data.address_components, 'postal_code')[1];
  const countryCode = getFieldData(data.address_components, 'country')[0];
  const countryName = getFieldData(data.address_components, 'country')[1];

  // need to check against short_name and long_name for all options

  let state = getFieldData(data.address_components, 'state') || [];
  let add1 = getFieldData(data.address_components, 'administrative_area_level_1') || [];
  let add2 = getFieldData(data.address_components, 'administrative_area_level_2') || [];
  let possibleStates = state.concat(add1, add2);

  let inputs = document.querySelectorAll(`[id^="${addressType}"]`);
  if (place == null) return;
  const addressArray = (addressType == 'billing') ? billingInput.value.split(',') : shippingInput.value.split(',');
  updateSelect(`${addressType}Country`, [countryCode, countryName]);
  updateSelect(`${addressType}State`, possibleStates);
  updateInput(`${addressType}City`, addressArray[1]);
	document.getElementById(`${addressType}City`).setAttribute("data-city", addressArray[1].trim());
  updateInput(`${addressType}Address1`, addressArray[0]);
	document.getElementById(`${addressType}Address1`).setAttribute("data-address", addressArray[0].trim());
  updateInput(`${addressType}Zip`, zipCode);
	document.getElementById(`${addressType}Zip`).setAttribute("data-zip", zipCode.trim());

  updateValidAttr(`location-${addressType}`, true);
  disableInput(getFieldArr(addressType), true);
}

function getFieldData(data, fieldName) {
  let obj = {};
  obj = data.filter((loc)=> loc.types.includes(fieldName));
  console.log(obj);
  if (obj && obj.length) {
    fieldObj = obj[0];
    return [fieldObj.short_name, fieldObj.long_name];
  }
}

function getFieldArr(type) {
  let simpArr = [getField(type, 'address'), getField(type, 'city'), getField(type, 'state'), getField(type, 'country'), getField(type, 'zip')];
  return simpArr;
}

function updateInput(id, val) {
  let input = document.getElementById(`${id}`);
  input.value = val ? val.trim() : '';
}

function updateSelect(id, val) {
  let selectElement = document.getElementById(id);
  let optionValues = getAllOptionValues(selectElement);
  let match = findCommonValue(val, optionValues);
  val = match;
  console.log('match: ', match);
  
  // let selectOption = document.querySelector(`#${id} option[value="${val[0]}"]`);
  if (match) {
    selectElement.value = val;
    var event = new Event('change', { bubbles: true });
    selectElement.dispatchEvent(event);
    let dataState = id.replace(/address|billing/g, '');
    selectElement.setAttribute(`data-${dataState}`, val);
  }
}

function getAllOptionValues(selectElement) {
  let optionValues = [];
  if (selectElement) {
    let options = selectElement.options;
    for (let i = 0; i < options.length; i++) {
      optionValues.push(options[i].value);
    }
  }
  return optionValues;
}

function findCommonValue(arr1, arr2) {
  let commonValues = [];
  for (let i = 0; i < arr1.length; i++) {
    let value = arr1[i];
    if (arr2.includes(value)) {
      commonValues.push(value);
    }
  }
  return commonValues[0];
}

function disableInput(inps, disable) {
  return false; //blocks disabled inputs on select
  inps.forEach((inp)=> {
    let isDisabled = inp.classList.contains('disabled');
    if (disable) {
      if (!isDisabled) {
        inp.classList.add('disabled');
      }
    } else {
      inp.classList.remove('disabled');
    }
  })
}

// type is 'billing' or 'shipping'
function getField(type, field) {
  let fieldElement = null;
  switch (field) {
    case 'country': fieldElement = document.getElementById(`${type}Country`);
    break
    case 'state': fieldElement = document.getElementById(`${type}State`);
    break
    case 'city': fieldElement = document.getElementById(`${type}City`);
    break
    case 'address': fieldElement = document.getElementById(`${type}Address1`);
    break
    case 'address2': fieldElement = document.getElementById(`${type}Address2`);
    break
    case 'zip': fieldElement = document.getElementById(`${type}Zip`);
    break
  }
  return fieldElement;
}

function updateValidAttr(id, isValid) {
  var element = document.getElementById(id); 
  element.dataset.valid = isValid;
}

const clearBillingBtn = document.getElementById('billing-btn-clear');
const clearShippingBtn = document.getElementById('shipping-btn-clear');

clearBillingBtn.addEventListener('click', ()=> {
  autocompleteBilling.set('place',null);
})

clearShippingBtn.addEventListener('click', ()=> {
  autocompleteShipping.set('place',null);
})
