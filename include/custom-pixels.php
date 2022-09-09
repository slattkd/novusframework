<?php

//
/*
If a client requests custom pixels to be added to the site, include them here.
This should be fired on every page, so via a proxy cron, through the queue manager
it will not load or show in the source. Variables will need to passed with the pixel.
*/

// TODO: Add functionality to prevent test orders from firing custom pixels (IE Taboola+Outbrain Issue)

switch ($url) {
    case "lander":
        //lander fire
        break;
    case "up01":
        //upsell 1 fire
        /*
        <iframe src="https://safetrkpro.com/p.ashx?o=35&e=1&fb=1&t=<?php echo $_SESSION['step_1_orderId']; ?>&r=<?php echo $_GET['r']; ?>" height="1" width="1" frameborder="0"></iframe>
        <img src='http://api.content.ad/Lib/TrackConversion.aspx?aid=aa28b4f6-81b8-48dd-ae8a-f1529865501d' width='1' height='1' />
        */
        break;
    case "up02":
        //upsell 2 fire
        break;
    case "up03":
    case "up04":
    case "dn01":
    case "dn02":
    case "dn03":
    case "dn04":
    default:
        //the default action, if any.
}



/*
// GA4 variables needed to add
// Transaction variables
var product_id;
var product_ids; //array of all product ids in collection
var category; //optional
var categories; // array of categories of all products in collection
var variant; //product variant
var product_name;
var product_names; // array of titles of all products
var price;
var price_total; // sum of value of all products in collection
var tax;
var shipping;
var currency; // 3 digit currency code
var item_count; // count of products in collection
var transaction_id;
var coupon;  // optional
var affiliation; // affiliate data??? $affid_subId

// Customer variables
var uid;
var email;
var mobile;
var firstname;
var lastname;
var address;
var city;
var state;
var country;
var zip;
var acceptsmarketing;

// When main shop listing is viewed
dataLayer.push({
'event': 'view_item_list',
'conversion': {
'action': 'view_item_list',
'collection': 'main'
}
});

// When product is viewed
dataLayer.push({
'event': 'view_item',
'conversion': {
'action': 'view_item',
'product_id': product_id,
'category': category,
'product_name': product_name,
'value': price,
'currency': currency
},
'ecommerce': {
'currencyCode': currency,
'detail': {
'products': [{
'name': product_name,
'id': product_id,
'price': price,
'category': category
}]
}
}
});

// When a product is added to cart
dataLayer.push({
'event':'add_to_cart',
'conversion' : {
'action': 'add_to_cart',
'value': price,
'category': category,
'currency': currency
},
'ecommerce': {
'currencyCode': currency,
'add': {
'products': [{
'name': product_name,
'id': product_id,
'price': price,
'brand': brand,
'category': category,
'variant': variant,
'quantity': item_count
}]
}
}
});

// When cart is viewed. Contains an array one or more products.
dataLayer.push({
'event':'view_cart',
'conversion' : {
'action': 'view_cart',
'value': price_total,
'currency': currency,
'category': categories,
'product_ids': product_ids,
'items': item_count
}
});

*
// When beginning checkout. Contains an array one or more products.*
dataLayer.push({
'event':'begin_checkout',
'conversion' : {
'action': 'begin_checkout',
'value': price_total,
'currency': currency,
'category': categories,
'product_ids': product_ids,
'items': item_count
},
'ecommerce': {
'checkout': {
'products': [ // array of product(s)
{
'name': product_name,
'id': product_id,
'price': price,
'category': category,
'variant': variant,
'quantity': item_count
}
]
}
}
});

// When a purchase is made
dataLayer.push({
'event':'purchase',
'customer': {
'id': uid;
'email': email,
'mobile': mobile,
'firstname': firstname,
'lastname': lastname,
'address': address,
'city': city,
'state': state,
'country': country,
'zip': zip,
'acceptsmarketing': acceptsmarketing
},
'conversion' : {
'action': 'purchase',
'product_ids': product_ids,
'value': price_total,
'category': category,
'content': content,
'currency': currency
},
'ecommerce': {
'currencyCode': currency,
'purchase': {
'actionField': {
'id': transaction_id,
'revenue': price_total,
'tax': tax,
'shipping': shipping,
'affiliation': affiliation,
'coupon': coupon
},
'products': [ // array of product(s)
{
'name': product_name,
'id': product_id,
'price': price,
'category': category,
'variant': variant,
'quantity': item_count,
'coupon': coupon
}
]
}
}
});

*/
