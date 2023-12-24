<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css"/>
    <title>Home | Experiment 1</title>
    <!-- Hotjar Tracking Code for https://experiments.universal-giving.org/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3735714,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <script>

        function getQueryParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }
        let userId = getQueryParam('rival_id');

        window.hj('identify', userId, {
            experiment_name: 'impact-v2'
        });
    </script>
</head>
<body>

<div class="max-w-2xl mx-auto">
    <div id="section-1" class="bg-cover h-48" style="background-image: url('./assets/images/bg-image.jpg')"></div>
    <div id="section-2" class="bg-white h-full rounded-tl-[20px] rounded-tr-[20px] -mt-10 sticky top-0">
        <div class="container px-4 pt-3">
            <div class="flex space-x-3">
                <img src="assets/images/logo.png" alt="logo">
                <div>
                    <h1 class="font-inter text-2xl font-[500]">Harmony Haven</h1>
                    <div class="mt-0.5">
                        <span class="badge">Animal Welfare</span>
                        <span class="badge">Local Charity</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-2xl mx-auto">
            <div class="border-b border-gray-200">
                <ul class="flex justify-between px-3" id="myTab" data-tabs-toggle="#myTabContent"
                    role="tablist">
                    <li role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-1 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                                id="overview-tab" data-tabs-target="#overview" type="button" role="tab"
                                aria-controls="overview" aria-selected="true">Overview
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-1 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                                id="impact-tab" data-tabs-target="#impact" type="button" role="tab"
                                aria-controls="impact" aria-selected="false">Impact
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-1 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                                id="stories-tab" data-tabs-target="#stories" type="button" role="tab"
                                aria-controls="stories" aria-selected="false">Stories
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-1 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                                id="supporters-tab" data-tabs-target="#supporters" type="button" role="tab"
                                aria-controls="supporters" aria-selected="false">Supporters
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div id="myTabContent">
            <div class="p-4 pb-24" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <?php include('partials/overview.php'); ?>
            </div>
            <div class="p-4 pb-24 hidden bg-white" id="impact" role="tabpanel" aria-labelledby="impact-tab">
                <h3 class="font-bold leading-6 text-black">
                    <span class="flex items-center space-x-1">
                        <img src="./assets/images/puzzle.png" alt="">
                        <span>Cause Overview</span>
                    </span>
                </h3>
                <p class="mt-2 text-gray-2">
                    Over <strong>80,000 animals in Canada annually suffer from neglect, abandonment, and poor care</strong>. This crisis overburdens shelters and demands increased community aid, better veterinary access, and stricter animal protection laws.
                </p>
                <h3 class="mt-4 font-bold leading-6 text-black">
                    <span class="flex items-center space-x-1">
                        <img src="./assets/images/dollar.png" alt="">
                        <span>Cost Effectiveness</span>
                    </span>
                </h3>
                <p class="mt-2 text-gray-2">
                    About <strong>$54.55</strong> to provide shelter to one animal per day.
                </p>
                <h3 class="mt-4 font-bold leading-6 text-black">
                    <span class="flex items-center space-x-1">
                        <img src="./assets/images/fingerprint.png" alt="">
                        <span>Evidence of Impact</span>
                    </span>
                </h3>
                <div class="mt-2 pb-2 flex items-center text-center">
                    <span class="w-1/3 bg-[#FEF3F3] text-[#F23030] text-sm py-1">weak</span>
                    <span class="w-1/3 bg-[#FFF0E9] text-[#F27430] text-sm py-1">average</span>
                    <span class="w-1/3 bg-[#DAF8E6] text-[#22AD5C] text-sm py-1 border border-[#22AD5C]">strong</span>
                </div>
                <p class="mt-2 text-gray-2">
                    The charity shows <strong>strong impact</strong>. Charity Intelligence has rated the evidence of impact at a 8/10, ensuring reliable evidence of the charity's effectiveness.
                </p>
            </div>
            <div class="p-4 pb-24 hidden bg-gray-3" id="stories" role="tabpanel" aria-labelledby="stories-tab">
                <?php include('partials/stories.php'); ?>
            </div>
            <div class="pb-24 hidden bg-gray-3 py-4" id="supporters" role="tabpanel" aria-labelledby="supporters-tab">
                <?php include('partials/supporters.php'); ?>
            </div>
        </div>
    </div>
    <?php include('partials/floating-buttons.php'); ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>