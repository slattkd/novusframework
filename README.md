# README

The Novus Framework (Novus is latin for "New") is designed from the ground up for a a performant well maintained funnel framework for Pineapple Company. The Framework allows quick launching of well tested
and complex systems in a tidy, easy to update package.

### How to Use tailwind

- Open Terminal and CD to local directory
- Run: npx tailwindcss -i input.css -o ./public/css/main.css --watch --minify

### Setting up Nginx

If you are using Nginx please make sure that url-rewriting is enabled.

You can easily enable url-rewriting by adding the following configuration for the Nginx configuration-file for the demo-project.

```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

### How do I get set up?

- Summary of set up (use composer update to install dependencies)
-- Composer 2 is required, please update using ```composer self-update --2```
- Uses TailWindCSS as the CSS Framework (Ship tiny!)
  https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss
  https://adamwathan.me/css-utility-classes-and-separation-of-concerns/
- Dependencies
-- PHP 8.1 is required
--- Use per site isolated PHP setting if needed with Valet https://laravel.com/docs/9.x/valet#per-site-php-versions
- Database configuration
- How to run tests
- Deployment instructions

### Contribution Guidelines

- Writing tests
- Code review
- Other guidelines

### Who do I talk to?

- Mike McBrien - mike@pineapple.co Pineapple Products


## To Do

- Add Page Version Numbers
- Add Template Override logic for specific affiliate views
- Add config variable for one page vs 3 step checkout
- Add logic for config controlled upsell/downsells
- Add config variable for DNVB vs Legacy Sticky
-

## The Config File
Almost everything in Novus Framework can be controlled or changed in the `include/config.php` file. Many fo the setting and variables defined in the
`include/config.php` are exposed to the rest of the site through global variables.

```php
<?php echo $company['name'];?>
```

As an example, the above line of code will show the company name.

## Getting Product Variable

Products are defined in the `include/products.json` file. Each of these are included in the "ProductsData" global variable.

Product info can be referenced from the products json file through the global variables by the following code:
```php
<?php echo $products['products'][4]['product_name'];?>
```

In the refrenced code, the "4" is the PID of the product. Any variables included in the `include/products.json` will be available in this global variable.

## Debug in Production Environments
The debug is automatically setup to work in local environments when using the novusframework.test url as defined in the config.php file.

You can override this behavior by adding a debug cookie with the following string `js6^g1hks92%ks7392hald81^11`.

There is a built in function to include this cookie. Add the query string `debug=js6^g1hks92%ks7392hald81^11` to enter debug mode in your browser. If you wish to turn off debug modes, enter the querystring `debug=no` or remove the cookie. Two page refreshes will likely be required to update the setting. This debug switch only affects YOUR browser.

## Adding Items to Order

Items are added using URL query strings. This allows the cart to be pouplated through a URL, and includes instant checkout sources
like email or SMS, as well as from a variety of influencer landing pages or other sources.

Adding items to the cart only requires including the PID in the URL querystring.

`https://example.com/order?pid=4`

The available options for checkout links include;

- `pid` = Product ID
- `up` = Upsell 1 Product ID
- `dn` = Downsell 1 Product ID
- `add1` = Product Add on Product ID
- `add2` = Product Add on Product ID
- `add3` = Product Add on Product ID

### Product Link Builder Example

You can combine any number of these to help redirect to the appropriate add ons or upsells and downsells.
While the funnels have default functionality for upsell and downsell products
this allows overrides at runtime or via the direct links and will allow
pages to add items straight from a landing page without complicated code switching.

IE: `https://example.com/order?pid=4&addon=81&up=662&dn=266`

This combination would set the clickable link to;
- Add PID 4 to the cart
- Include PID 81 as an add on
- Set the next upsell to PID 662
- Set the next downsell to PID 266

## PageTypes and GTM Events
PageTypes are automatically included in the director.php file are derived from the
"Slug"of the page without the file extension.

PageTypes dictate what pixels are bing fired, options should be limited to:

  1. vsl
  2. wsl
  3. assessemnt
  4. order
  5. onepage
  6. step1, step2, step3
  7. up1, up2, up3, up4
  8. dn1, dn2, dn3
  9. receipt

PageTypes can be overridden on a page by page basis, by overriding the "pageType" session variable.'

```$_SESSION['pageType'] = 'vsl';```

## Video Embeds
NOTE: Vidalytics uses a "Smart Autoplay" feature, which follows chromes rules and will autoplay videos ONLY if.
1. The user has already interacted with page.
2. The user has previously played a video with sound.

Because of this javascript tricks are no longer needed to click our auto play.


To embed videos use the following template include.
``` <?php video('includes/player', $vidcode, $droptime, "//s3.amazonaws.com/flora-spring/animatedposter.gif");?>```







