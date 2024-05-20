<!-- branded footer bar with basic company info and legal links -->

<?php
  if (!isset($show_aff)) {
    $show_aff = 1;
  }
?>

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

<section>
    <div class=" p-4 md:p-8 border-t bg-white">
      <div class="flex flex-col items-center">
        <div class="flex justify-center w-full md:w-auto mb-5">
        <!-- /images/rp-logo.png -->
          <img src="//<?= $_SERVER['HTTP_HOST'];?><?= $site['logo']; ?>" class="mx-auto" style="width: 90%;max-width:275px">
        </div>
        <div class="flex justify-center items-center w-full md:w-auto mb-2 md:mb-0 text-gray-500 phone-order">
          <div class="text-sm flex items-center flex-nowrap mb-2">
          <div class="phone-square mr-1" style="width: 20px;height:20px;"></div> For Help Ordering Call
          <a class="text-rpblue no-underline mx-1 text-sm" href="tel:<?= $company['phone_specialist']; ?>"><?= $company['phone_specialist']; ?></a>
          </div>
        </div>
        <div class="text-xs text-center font-gray-600 mb-3">
            <p class="mb-4">These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
          © <?= $company['name']?> <?= date("Y"); ?>. All Rights Reserved
          <?= $company['address1']?>, <?= $company['city']?>, <?= $company['state']?> <?= $company['zip']?>
        </div>
        <div class="flex justify-center">
        <?php legalLinks("includes/legalLinks", $show_aff);?>
        </div>
      </div>
    </div>
</section>