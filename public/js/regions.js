/**
 * Created by ondrejbohac on 19.09.16.
 */

import data from './country-state.json' assert { type: 'json' };

console.log(data);

// functionality specific to individual inputs on the page
document.addEventListener('DOMContentLoaded', ()=> {
    const billingCountry = document.getElementById('billingCountry');
    const shippingCountry = document.getElementById('shippingCountry');
    const billingState = document.getElementById('billingState');
    const shippingState = document.getElementById('shippingState');

    billingCountry.addEventListener('change', ()=> {
        getStateOptions(billingState, billingCountry.value)
    })

    shippingCountry.addEventListener('change', ()=> {
        getStateOptions(shippingState, shippingCountry.value)
    })

    function initCountrySelect(selectElement) {
        for(var i = 0; i < data.length; i++) {
            var opt = data[i];
            var el = document.createElement("option");
            el.textContent = opt.country;
            el.value = opt.code;
            selectElement.appendChild(el);
        }
        selectElement.value = 'US';
        selectElement.dispatchEvent(new Event('change'));
    }

    function getStateOptions(selectElement, countryCode) {
        console.log(selectElement, countryCode);
        let selectedCountry = data.filter((country)=> country.code == countryCode);
        let stateList = selectedCountry[0].states;
        console.log(selectedCountry);
        selectElement.innerHTML = '';
        for(var i = 0; i < stateList.length; i++) {
            var opt = stateList[i];
            var el = document.createElement("option");
            el.textContent = opt;
            el.value = opt;
            selectElement.appendChild(el);
        }
        selectElement.selectedIndex = 0;
        selectElement.dispatchEvent(new Event('change'));
    }

    initCountrySelect(billingCountry);
    initCountrySelect(shippingCountry);
    
})
