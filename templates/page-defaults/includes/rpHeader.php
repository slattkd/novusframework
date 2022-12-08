<style>
    .headstrip {
      display: flex;
      Justify-content: center;
      align-items: center;
      width: 100vw;
      padding: 0.25rem 0;
      background-color: #006894;
      color: white;
    }
</style>

<?php if (@$_SESSION['pageType'] != 'wsl') { ?>
<section class="headstrip">
  <div class="flex flex-wrap uppercase text-center">
    <div class="mx-auto">
      <div class="hidden md:block"><strong class="black"><span class="lock-icon mr-2"><i class="fas fa-lock"></i></span>  SECURE</strong>&nbsp;|&nbsp;You Are On A 256-Bit Secure Order Page</div>
      <div class="md:hidden"><strong class="black"><i class="fas fa-lock mr-2"></i> SECURE</strong>&nbsp;|&nbsp;256-Bit Secure Order</div>
    </div>
  </div>
</section>
<?php } ?>

<section>
    <div class=" py-0 md:py-1 border-b bg-white">
      <div class="flex flex-wrap justify-center container <?php echo @$_SESSION['pageType'] !== 'wsl' ? 'container-sm md:justify-between' : 'container-vsl'; ?> mx-auto  w-full px-2 md:px-0">
        <div class="flex justify-center w-full md:w-auto py-2 ,d:py-0">
          <img src="//<?= $_SERVER['HTTP_HOST'];?><?= $site['logo']; ?>" class="mx-auto" style="max-width:300px;object-fit:contain;">
        </div>
        <?php if (@$_SESSION['pageType'] !== 'wsl'): ?>
        <div class="flex justify-center items-center w-full md:w-auto mb-2 md:mb-0 text-gray-500">
          <div class="text-sm flex items-center flex-nowrap">
          <div class="phone-square mr-1" style="width: 20px;height:20px;"></div> Call
          <a class="text-rpblue no-underline mx-1" href="tel:<?= $company['phone']; ?>"><?= $company['phone']; ?></a> <span class="lg-up md:hidden">to Order by Phone</span>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
</section>

<script>

</script>