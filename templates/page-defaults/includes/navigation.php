<div class="w-full mx-auto bg-white">
    <section class="max-w-5xl mx-auto flex justify-between bg-no-repeat bg-right bg-contain bg-none" style="background-image: url('//<?= $_SERVER["HTTP_HOST"];?>/images/help-center.jpg')" >
        <img class="max-h-14 md:max-h-20 md:p-2 md:pl-0" src="<?php echo $site['logo'];?>" alt="<?php echo $company['name'];?> Logo">
        <div class="p-2 md:pr-28 backdrop-blur-sm bg-white/60 md:backdrop-filter-none md:bg-white/10">
            <div class="text-[8px] md:text-base font-bold uppercase">Contact Customer Service</div>
            <div class="text-red-700 hover:text-red-700 text-md md:text-3xl font-bold subpixel-antialiased "><?php echo $company['phone'];?></div>
        </div> 
    </section>
</div>