<?php
  date_default_timezone_set( "America/New_York" );
  error_reporting(0);
    // include('../config.php');
    // include('../inc/class.cart.php');
  
  $products = [
    [
      'pid' => '01234',
      'title' => '5G Male Enhancement',
      'description' => 'Organic supplament for addressing declining health issue',
      'imgURL' => 'https://5gmale.test/images/products/5g.png',
      'imgDescription' => 'single bottle of product',
      'size' => '1 month',
      'sub' => false,
      'price' => 49.99
    ],
    [
      'pid' => '01235',
      'title' => '5G Male Enhancement',
      'description' => 'Organic supplament for addressing declining health issue',
      'imgURL' => 'https://5gmale.test/images/products/5g.png',
      'imgDescription' => 'three bottles of product',
      'size' => '3 month',
      'sub' => false,
      'price' => 59.99
    ]
  ];
  // $ship_standard = 9.95;
  // $ship_express = 16.95;
  $ship_cost = 0.00;
?>

<!DOCTYPE html>
<html>
  <head>
    <?php template("includes/header"); ?>
    <title><?php echo $company->name; ?> | Cart</title>


  </head>
  <body class="bg-gray-50">
  <?php template('includes/basicHeader'); ?>
    
    <div class="container container-vsl mx-auto py-20 px-5 md:px-8 min-h-screen">

    <div class="mx-auto">
        <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

        <div class="mt-4 bg-white border border-gray-200 rounded-lg ">
          <h3 class="sr-only">Items in your cart</h3>
          <ul role="list" class="divide-y divide-gray-200">

            <!-- iterate over products -->
            <?php foreach($products as $product): ?>
            <li id="product-<?= $product['pid']; ?>" class="flex py-6 px-4 sm:px-6">
              <div class="flex-shrink-0">
                <img src="<?= $product['imgURL']; ?>" alt="<?= $product['imgDescription']; ?>" class="w-20 border">
              </div>

              <div class="ml-6 flex-1 flex flex-col">
                <div class="flex">
                  <div class="min-w-0 flex-1">
                    <h4 class="text-sm">
                      <a href="#" class="font-medium text-gray-700 hover:text-gray-800"><?= $product['title']; ?></a>
                    </h4>
                    <p class="mt-1 text-sm text-gray-500"><?= $product['description']; ?></p>
                    <p class="mt-1 text-sm text-gray-500"><?= $product['size']; ?></p>
                  </div>

                  <div class="ml-4 flex-shrink-0 flow-root">
                    <!-- TODO? : php wrap with <a tag and href action=remove&id=<?= $product['pid']; ?> -->
                    <button onclick="removeProduct('<?= $product['pid']; ?>', event)" type="button" class="-m-2.5 bg-white p-2.5 flex items-center justify-center text-gray-400 hover:text-gray-500" title="remove product">
                      <span class="sr-only">Remove</span>
                      <!-- Heroicon name: solid/trash -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
                </div>

                <div class="flex-1 pt-2 flex items-end justify-between">
                  <p id="price-<?= $product['pid']; ?>" class="mt-1 text-sm font-medium text-gray-900"><?= $product['price']; ?></p>

                  <!-- quantity not needed -->
                  <div class="ml-4 invisible">
                    <label for="quantity" class="sr-only">Quantity</label>
                    <select id="quantity" name="quantity-<?= $product['pid']; ?>" class=" border border border-gray-300 px-3 py-2text-base font-medium text-gray-700 text-left  focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                    </select>
                  </div>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
            <!-- no products -->
            <?php if(empty($products)): ?>
            <div class="flex justify-center text-gray-400 text-xl p-6">
              No products in cart.
            </div>
            <?php endif; ?>

            <!-- More products... -->
          </ul>
          <dl class="border-t border-gray-200 py-6 px-4 space-y-6 sm:px-6">
            <div class="flex items-center justify-between">
              <dt class="text-sm">Subtotal</dt>
              <dd class="text-sm font-medium text-gray-900">$<span id="sub-total"></span></dd>
            </div>
            <div class="flex items-center justify-between">
              <dt class="text-sm">Shipping</dt>
              <dd class="text-sm font-medium text-gray-900">$<span id="shipping"><?= $ship_cost; ?></span></dd>
            </div>
            <!-- <div class="flex items-center justify-between">
              <dt class="text-sm">Taxes</dt>
              <dd class="text-sm font-medium text-gray-900">$<span id="sales-tax"></span> </dd>
            </div> -->
            <div class="flex items-center justify-between border-t border-gray-200 pt-6">
              <dt class="text-base font-medium">Total</dt>
              <dd class="text-base font-medium text-gray-900">$<span id="total"></span></dd>
            </div>
          </dl>

          <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
            <div id="error-wrapper" class="flex flex-col mb-2 text-red-700 text-sm mb-5 hidden">
              <!-- input errors are injected here -->
            </div>
            <a href="/tailwind/checkout-t">
            <button 
              type="submit" 
              class="w-full bg-green-600 hover:bg-green-600 border border-transparent rounded-md py-3 px-4 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">
              Checkout
            </button>
            </a>
            <div class="flex justify-center text-center mt-6 hide">
              <a href="/tailwind/5gmale-t" class="text-gray-500 hover:underline clickable">Continue Shopping</a>
            </div>
          </div>
        </div>
        
      </div>

    </div>

    
  <script>
    function removeProduct(pid, event) {
      var button = event.currentTarget;
      var element = document.getElementById(`product-${pid}`);
      if (button.classList.contains('bg-red-600')) {
        element.remove();
        updateTotal();
      } else {
        button.className += ' bg-red-600 rounded-full text-white hover:text-gray-300';
        button.title = 'Are you sure?';
      }
    }


    var sub = document.getElementById('sub-total');
    var ship = document.getElementById('shipping');
    // var tax = document.getElementById('sales-tax');
    var total = document.getElementById('total');
    function updateTotal() {
      subTotal = 0;
      var products = document.querySelectorAll('[id^="price-"]');
      products.forEach(product => {
        var quantity = document.querySelector(`#${product.id} ~ div>select`);
        subTotal = (subTotal + parseFloat(product.innerHTML)) * quantity.value;
      })
      sub.innerHTML = subTotal;
      ship.innerHTML = ship.innerHTML ? parseFloat(ship.innerHTML) : 0;
      // adjust sales tax here (0.000001 doesnt pass float, value is zero)
      let salesTax = parseFloat(sub.innerHTML) * 0.000001;
      // tax.innerHTML =  salesTax.toFixed(2);
      let salesTotal = subTotal + parseFloat(ship.innerHTML) + salesTax;
      total.innerHTML = salesTotal.toFixed(2);
    }
    window.onload = updateTotal();
  </script>

    <?php template('includes/footer'); ?>
    <?php if ($site['debug'] == true) {
        template('debug', 'debug');
    } ?>
  </body>
</html>