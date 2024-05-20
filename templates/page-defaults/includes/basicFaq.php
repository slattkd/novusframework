<?php
/* 
currently just for 5g FAQ content
replace Q/A array content as needed (close attention to apostraphe/quotes)
*/

    $qas = array(
    array(   'Can I Take More Than One Capsule of 5G Male To Get Even Stronger Results?',
            "<p>While 1 capsule per day will deliver strong results, it’s recommended you take 2-3 capsules per day if you want even stronger results. One bottle of 5G Male contains 30 capsules. If you increase your dose, it's recommended you order the <span id='six-package' style='cursor:pointer;'><u>6 bottle package</u></span> which provides the biggest discount.</p>",
    ),
    array(   'What Makes 5G Male So Much Better Than All of the Other “Natural” Options Out There?',
            "<p>5G Male uses third-party verification of its ingredients from its lab right here in the United States, which means no fillers, no illegal ingredients from China, and no dangerous ingredients like yohimbe or huge amounts of caffeine that will send your heart rate skyrocketing.</p>",
    ),
    array(   'Sounds like I’m going to be a lot harder a lot more often...any risk of developing an all-day erection that doesn’t go away?',
            "<p>5G Male is designed to restore your penis to its natural, high-functioning state by increasing blood flow, which allows you to regain control over your erections and get hard when it’s natural.</p>",
    ),
    array(   'Since this contains some pharmaceutical-grade ingredients, do I need to see my doctor before using it?',
            "<p>It’s ALWAYS a good idea to see your doctor before taking any supplement...but the ingredients in 5G Male are naturally extracted from food products, so they don’t require a prescription or standing in an embarrassing line at the pharmacy.</p>",
    ),
    array(   'Are there any restrictions on how I need to take 5G Male, like with a meal?',
            "<p>Nope, no restrictions--5G Male is designed to be taken whenever it’s convenient for YOU...all you need is a full glass of water and you’re good-to-go.</p>",
    ),
    array(   'How long does it usually take for 5G Male to work? Are we talking days? Weeks? Months?',
            "<p>5G Male isn’t a cheap, gimmicky “quick fix”--it can take up to 2-4 weeks to start rebooting your system so that your blood flow to your penis is effortlessly increased...but in case it takes longer we provide a full 90-day “no questions asked” refund policy.</p>",
    ),
    array(   'How will I know when 5G Male starts working? Will I notice any changes in my body?',
            "<p>The biggest change you’ll notice is that after a couple of weeks, it’ll be easier to get harder erections...and you’ll be able to “recharge” and go at it again with the woman you’re with a lot more quickly.</p>",
    ),
    array(   'I’m worried about ordering over the internet...how do I know you’re a solid operation?',
            "<p>5G Male is made in a GMP-certified lab right here in the United States, and the ingredients go through 5 separate quality-control checks before bottling. Not only that, but we have an A+ Better Business Bureau rating, and the owner of Supernatural Man has been doing business online for almost a decade...and makes your security a priority through measures like TrustE and Norton certifications, and 256-bit SSL Secure encryption, which is the absolute top-of-the-line method to protect your private information and data.</p>",
    ),
    array(   'This all seems “too good to be true”...are there any hidden fees? Can I really cancel anytime I want?',
            "<p>Nope, no hidden fees, and cancellation is easy using the 24-hour phone number provided...plus you’ll get your tracking number as soon as you order and you have a 90-day “no questions asked” money-back guarantee if you try it and decide that your new lifestyle is just “too much.”</p>",
    ),
    array(   'Since the ingredients in 5G Male are just in 5 simple foods, can’t I just go to the store, get these ingredients, and cook with them?',
            "<p>You could, but you won’t know the right amounts of each ingredient you need, plus a lot of the ingredients (like garlic, ginko, and ginseng) don’t taste great when you eat them in the quantities that you need to in order to see a real difference in your sexual health.</p>",
    ),
    array(   'Any other added benefits of 5G Male I should know about? Like how green tea can help with your heart?',
            "<p>Absolutely! Ginseng can help with your sperm quality and “load size”...ginko helps with your memory and concentration...compounds in garlic can help with blood pressure and cholesterol levels...and ginger can help with weight loss and energy levels. These are just a few of the side benefits to these ingredients proven with scientific studies at major journals and universities.</p>",
    ),
    array(   'I already take medication...anything else this can conflict with?',
            "<p>If you’re already on medication, consult your doctor before taking 5G Male.</p>",
    ),
    array(   'What are some of the benefits of 5G Male Plus over regular 5G Male?',
            "<p>5G Male Plus contains a high-quality vitamin-C extract in it, plus a pharmaceutical-grade garlic extract that is deodorized to prevent bad breath, and Rhodiola Rosea, which has been shown to boost sexual desire and dopamine levels in the brain by several researchers and studies.</p>",
    ),
    array(   "What's the shelf life of 5G Male?",
            "<p>5G Male Plus is manufactured using the highest standards and quality of ingredients, and care is taken to make sure every bottle is good for at least 5 years on the shelf.</p>",
    ),
    array(   'Is this product made in the US?',
            "<p>Yes! 5G Male Plus is proudly manufactured in the USA and follows all of the highest and most stringent standards of quality control and safety.</p>",
    ),
    array(   'Many reviewers state that "this is the best male enhancement supplement", how can you tell that it is actually effective?',
            "<p>If you have any concerns or questions about how effective 5G Male Plus is that haven't been answered by all of the amazing success stories you've already heard, the only option is to get your hands on this super powerful solution and experience the rock hard erections and bottomless sexual stamina for yourself!</p>",
    ),
    array(   'Is this product gluten or dairy free?',
            "<p>Yes, 5G Male Plus is free from both gluten and dairy.</p>",
    ),
    array(   'Do you have to refrigerate this product?',
            "<p>No, 5G Male Plus is designed to stay fresh, potent, and effective without any sort of refrigeration.</p>",
    ),
    array(   'Is there any aftertaste?',
            "<p>5G Male Plus is a pill, so there is no aftertaste whatsoever. If you take it with water, it will taste like water, if you take it with coffee it will taste like coffee.</p>",
    )
    );
?>

<style>
    .accordion {
    overflow: hidden;
    }
    .accordion-content {
    max-height: 0;
    opacity: 0;
    transition: all ease-in-out 0.5s;
    }
    input:checked + .accordion-label .test svg {
      transform: rotate(180deg);
    }
    input:checked + .accordion-label::after {
      transform: rotate(90deg);
    }
    input:checked ~ .accordion-content {
      max-height: 100vh;
      opacity: 1;
    }
    .accordion input {
        z-index: 1;
    }
</style>

<main class="mx-auto">
    <section class="row">
        <div class="accordions">
            <?php foreach ($qas as list($q, $a)): ?>
                <div class="border-b accordion">
                <div class="border-l-2 border-transparent relative">
                    <input class="w-full absolute z-10 cursor-pointer opacity-0" type="checkbox" id="chck1" style="height: 100%;">
                    <div class="flex justify-between items-center p-3 px-0 cursor-pointer select-none accordion-label" for="chck1">
                        <span class="text-grey-darkest font-thin text-xl">
                        <?= $q ;?>
                        </span>
                        <div class="rounded-full w-7 h-7 flex items-center justify-center test">
                            <!-- icon by feathericons.com -->
                            <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="6 9 12 15 18 9">
                                </polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="p-3 pt-0 text-grey-400">
                        <?= $a ;?>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>


        </div>
    </section>
</main>