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
          <img src="//<?= $_SERVER['HTTP_HOST'];?><?= $site['logo']; ?>" class="mx-auto" style="max-width:300px">
        </div>
        <div class="text-sm text-center font-gray-600 mb-3">
          © <?= $company['name']?> 2022. All Rights Reserved
          <?= $company['address1']?>, <?= $company['city']?>, <?= $company['state']?> <?= $company['zip']?>
        </div>
        <div class="flex justify-center">
        <?php legalLinks("includes/legalLinks");?>
        </div>
      </div>
    </div>
</section>