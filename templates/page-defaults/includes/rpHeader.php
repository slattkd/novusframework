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

<section class="headstrip">
  <div class="flex flex-wrap uppercase text-center">
    <div class="mx-auto">
      <span class="lock-icon"><i class="fas fa-lock"></i></span> 
      <strong class="black">SECURE</strong>&nbsp;|&nbsp;You Are On A 256-Bit Secure Order Page
    </div>
       
  </div>
</section>

<section>
    <div class=" py-2 border-b bg-white">
      <div class="container container-vsl mx-auto flex justify-between flex-wrap w-full">
      <div class="flex justify-center w-full md:w-auto" style="margin-left: -15px;">
        <img src="//<?= $_SERVER['HTTP_HOST'];?><?= $site['logo']; ?>" class="mx-auto" style="max-width:250px">
      </div>
      <div class="flex justify-center items-center w-full md:w-auto">
        <div class="">
        <i class="fas fa-phone-square-alt phone-ico"></i> Call
        <a href="tel:<?= $company['phone']; ?>"><?= $company['phone']; ?></a> <span class="lg-up">Now to Order by Phone</span>
        </div>
      </div>
      </div>
    </div>
</section>

<script>

</script>