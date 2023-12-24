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
            experiment_name: 'rose-diagram'
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
            <div class="p-4 pb-24  bg-white" id="impact" role="tabpanel" aria-labelledby="impact-tab">
                <div class="flex items-center justify-center space-x-2">
                    <h3 class="font-semibold">Overall Impact Rating</h3>
                    <img src="./assets/images/rating_star.png" alt="">
                </div>
                <p class="mt-1 text-center text-sm text-gray-2">Details of calculations below</p>
                <canvas class="-mt-0" id="myChart"></canvas>
                <p class="-mt-6 text-center text-gray-2" id="tap-info">👆Tap on a dimension to learn more </p>
                <div class="-mt-6 hidden" id="info-bucket">
                    <h5 id="lm-header" class="font-bold">Results Reporting = 9 /10</h5>
                    <hr class="my-1 border-2 border-[#77D1F3]" id="lm-border">
                    <p class="mt-1.5 text-gray-2 whitespace-pre-wrap pb-[200px]" id="lm-body">
                        Grades how openly a charity talks about what it does, what it achieves, and the impact of its work. A higher grade means more clear, detailed information is shared.
                        This dimension makes up 35% of the Overall Charity Rating
                    </p>
                </div>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
<script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>
<script src="./assets/js/polar-area-chart.js"></script>

</body>
</html>