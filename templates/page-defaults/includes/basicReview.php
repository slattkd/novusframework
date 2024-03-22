<!-- currently just for review content -->
<!-- TODO: secondary style option on upsell 1,2,3,4 -->
<?php

    $reviews = array(
            array(
                "name" => "Christina D.",
                "location" => 'Brooklyn, NY',
                "date" => 'December 13, 2022',
                "title" => 'I’ve Lost 20 Pounds While Taking Floraspring!',
                "copy" => 'I feel like my body weight is definitely better. I’ve lost about 20 pounds while taking Floraspring and I’m just feeling more energy, feeling slimmer, feeling like my curves are back, which is awesome! My cravings? Gone. Floraspring has affected my cravings in a very positive way...More than anything else, Floraspring has definitely made me feel more confident because it’s helped me lose the weight, which has helped me get my curves back and just helped me really feel better about myself.'
            ),
            array(
                "name" => "Lina S.",
                "location" => 'Austin TX',
                "date" => 'December 13, 2022',
                "title" => 'I would definitely recommend Floraspring to others!',
                "copy" => "After taking Floraspring, I felt that my cravings weren’t as strong as they were before. I started making healthier choices with my breakfast...I started making better choices with lunch and dinner and exercising more because I started feeling better about myself because I wasn’t craving those sweets...I’ve actually gone in the closet and found things that I thought I would never wear again or dresses that wouldn’t zip up, and I just hid in the back of the closet… and now I’m wearing those smaller clothes again and they look great on me!"
            ),
            array(
                "name" => "Theodosia A.",
                "location" => 'Fargo, ND',
                "date" => 'December 10, 2022',
                "title" => 'Simply the best supplement',
                "copy" => "You just have to try it yourself. It is simply the best supplement. Keep on-diet and do some walking at the same time and everything will be fine."
            ),
            array(
                "name" => "Lea M.",
                "location" => 'Tulsa, OK',
                "date" => 'December 13, 2022',
                "title" => 'Great Results!',
                "copy" => "How to use it: for about 3 months I believe that I've lost about twenty pounds of not water but fat. I know that it cleaned my body out! I felt so much lighter and so much better. You still need to follow and maintain a good diet."
            ),
            array(
                "name" => "Christina D.",
                "location" => 'Brooklyn, NY',
                "date" => 'December 13, 2022',
                "title" => 'I’ve Lost 20 Pounds While Taking Floraspring!',
                "copy" => 'I feel like my body weight is definitely better. I’ve lost about 20 pounds while taking Floraspring and I’m just feeling more energy, feeling slimmer, feeling like my curves are back, which is awesome! My cravings? Gone. Floraspring has affected my cravings in a very positive way...More than anything else, Floraspring has definitely made me feel more confident because it’s helped me lose the weight, which has helped me get my curves back and just helped me really feel better about myself.'
            ),
            array(
                "name" => "Carter p.",
                "location" => 'Colorado Springs, CO',
                "date" => 'December 07, 2022',
                "title" => 'Works For Me!',
                "copy" => "I would tell them that it works for me and that I lost 7 pounds in 2 weeks. And that you are given 3 free sugar-free chocolate bars that have probiotics in them, which also helps you lose weight.!"
            ),
            array(
                "name" => "Hilda O.",
                "location" => 'Knoxville, TN',
                "date" => 'December 05, 2022',
                "title" => 'Just Take It!',
                "copy" => "I'd say (to people considering taking Floraspring) “just take it.” At least try. It cannot do any harm but I promise you that it works for me. Being relieved of my sugar addiction is the greatest feeling and I'm not even tempted to fall off the wagon!"
            ),
            array(
                "name" => "Roseanne B.",
                "location" => 'Tuscon, AZ',
                "date" => 'December 05, 2022',
                "title" => 'I have lost weight AND inches!',
                "copy" => "I have already recommended it to several friends who have purchased it because they saw the results with me! I have lost weight AND inches! The thing is, hardly ANYone takes care of their gut health. And the gut is the center of health! Everything starts there. It can't NOT work, because you are balancing your microbiome. This in turn will enhance your immune system function, improve symptoms of depression, help with sleep problems, improve your skin, and a whole lot of other benefits in ADDITION to weight loss. Why wouldn't everyone want this?!"
            ),
            array(
                "name" => "Sharon P.",
                "location" => 'Houston, TX',
                "date" => 'December 13, 2022',
                "title" => 'I am pleased with Floraspring!',
                "copy" => 'I have been pleased with the product, as well as the speed of shipping. My experience has been that this is a product that has been helpful at achieving good results with my weight loss progress.'
            ),
            array(
                "name" => "Dana R.",
                "location" => 'Birmingham, AL',
                "date" => 'December 13, 2022',
                "title" => "I'm less hungry before meals and eat less...",
                "copy" => "I'm interested about probiotics so my friend recommended this one she takes... so far so good. No side effects I've noticed. I'm less hungry before meals and eat less... I used to get my second helping almost every dinner but now that's only for special occasions."
            ),
            array(
                "name" => "D. D.",
                "location" => 'Miami, FL',
                "date" => 'December 04, 2022',
                "title" => 'I would highly recommend Floraspring!',
                "copy" => "I would highly recommend Floraspring to anyone with irregularity issues, low energy, problems concentrating. You won't be disappointed."
            ),
    
    );
?>

<style>
        .mix {
                mix-blend-mode: multiply;
        }
        .review:last-of-type {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;

        }

        .text-red {
            color: #be0000;
        }
</style>

<section>
        <?php 
        $i = 1;
        foreach ($reviews as $review): ?>
        <div class="review mb-8 pb-8">
                <div class="flex flex-nowrap items-center">
                <div><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/gray-user-icon.png" alt="avatar" class="mix"></div>
                <div class="text-gray-500 text-bold ml-2"><?= $review['name']?>, <?= $review['location']?></div>
                </div>

                <div class="flex flex-wrap-reverse md:flex-nowrap mb-0">
                    <div><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/star-icon.png" class="mr-3 mix" alt="stars"></div>
                    <div class="text-lg"><strong>“<?= $review['title']?>”</strong></div>
                </div>
                <p class="text-sm mb-2">
                <?php
                $today = date("F d, Y");
                $i++;
                echo date('F d, Y', strtotime($today . ' -' . $i . 'days'));
                ?>
                &nbsp; | &nbsp; <strong class="text-red">Verified Purchase</strong>
                </p>
                <p class="text-sm text-gray-500 md:text-black"><?= $review['copy']?></p>
                <?php if($i == 2): ?>
                <div class="flex justify-center text-center text-gray-600 mt-3 text-xs">
                (Note: results not typical, average user can expect to lose 1-2 lbs per week with diet and exercise)
                </div>
                <?php endif;?>
        </div>

        <?php endforeach; ?>

</section>
