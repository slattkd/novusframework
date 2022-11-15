<style>
    .head-wrap {
    width: 100%;
    background: #313B3D;
    z-index: 99;
  }
  @keyframes append-animate {
      from {
        transform: scaleY(0);
        opacity: 0;
      }
      to {
        transform: scaleY(1);
        opacity: 1;
      }
    }

    #drop-menu {
      height: auto;
      transform-origin: 50% 0;
      animation: append-animate 250ms ease-in-out;
      transition: all 250ms ease-in-out;
    }

    #drop-menu.hidden {
      height: 0;
    }
</style>



<nav id="nav" class="z-0 relative"">
  <div class="relative z-10 bg-zinc-700 shadow">
    <div class="container container-md mx-auto px-5">
      <div class="relative flex items-center h-16">
        <div class="flex items-center justify-between w-full px-0">
          <a class="flex-shrink-0" href="/tailwind/index.php">
            <img class="" src="/images/snm-logo.gif" alt="Supernatural Logo" style="max-width:250px;height:auto;">
          </a>
          <div class="hidden md:block md:ml-auto">
            <div class="flex">
              <a href="/tailwind/5gmale-t.php" class="ml-4 px-3 py-2 text-sm uppercase leading-5 text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Shop </a>
              <a href="/tailwind/about.php" class="ml-4 px-3 py-2 text-sm uppercase leading-5 text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> About </a>
                            <a href="/tailwind/support.php" class="ml-4 px-3 py-2 text-sm uppercase leading-5 text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Support </a>
                            <a href="/tailwind/cart-t.php" class="ml-4 px-3 py-2 text-sm uppercase leading-5 text-gray-400 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Cart </a>
            </div>
          </div>
                </div>

        <div class="flex md:hidden">
          <button onclick="toggleMenu()" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div id="drop-menu" class="hidden md:hidden container px-5">
      <div class="px-2 pt-2 pb-3">
        <a href="/tailwind/5gmale-t.php" class="mt-1 block px-3 py-2 rounded-md text-gray-400 hover:text-white focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Shop </a>
        <a href="/tailwind/about.php" class="mt-1 block px-3 py-2 rounded-md text-gray-400 hover:text-white focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">About </a>
        <a href="/tailwind/support.php" class="mt-1 block px-3 py-2 rounded-md text-gray-400 hover:text-white focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Support </a>
        <a href="/tailwind/cart-t.php" class="mt-1 block px-3 py-2 rounded-md text-gray-400 hover:text-white focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Cart </a>
      </div>
    </div>
  </div>
</nav>

<script>
  var nav = document.getElementById('nav');
  var drop = document.getElementById('drop-menu');
  var menu = false;
  function toggleMenu() {
    menu = !menu;
    !menu ? drop.classList.add('hidden') : drop.classList.remove('hidden');
  }
</script>