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
            experiment_name: 'data-model'
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
            <div class="p-4 pb-24 bg-gray-3" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <?php include('partials/overview.php'); ?>
            </div>
            <div class="p-4 pb-24 hidden bg-gray-3" id="impact" role="tabpanel" aria-labelledby="impact-tab">
                <div class="text-center">
                    <h2 class="font-bold">Funds in Action: 2022 Programs</h2>
                    <img src="./assets/images/pie-chart.svg" alt="" class="mt-3 mx-auto">
                    <p class="mt-2 text-gray-2 font-bold">👇 Tap on a program to learn more</p>
                </div>
                <div class="mt-5 flex flex-col items-start space-y-3">
                    <button id="pie-chart-1" data-modal-target="pie-profile" data-modal-toggle="pie-profile" type="button" class="flex items-center justify-start space-x-1.5 bg-white py-1.5 px-2 rounded-md shadow-2xl shadow-[#0D0A2C] w-full cursor-pointer">
                        <div class="w-5 h-5 bg-[#2D68F8] rounded-sm"></div>
                        <div class="text-gray-2">39% Adoption and Shelter Services</div>
                    </button>
                    <button id="pie-chart-2" data-modal-target="pie-profile" data-modal-toggle="pie-profile" type="button" class="flex items-center justify-start space-x-1.5 bg-white py-1.5 px-2 rounded-md shadow-2xl shadow-[#0D0A2C] w-full cursor-pointer">
                        <div class="w-5 h-5 bg-[#D345F8] rounded-sm"></div>
                        <div class="text-gray-2">27% Animal Health and Wellness</div>
                    </button>
                    <button id="pie-chart-3" data-modal-target="pie-profile" data-modal-toggle="pie-profile" type="button" class="flex items-center justify-start space-x-1.5 bg-white py-1.5 px-2 rounded-md shadow-2xl shadow-[#0D0A2C] w-full cursor-pointer">
                        <div class="w-5 h-5 bg-[#13C296] rounded-sm"></div>
                        <div class="text-gray-2">15% Community Pet Education</div>
                    </button>
                    <button id="pie-chart-4" data-modal-target="pie-profile" data-modal-toggle="pie-profile" type="button" class="flex items-center justify-start space-x-1.5 bg-white py-1.5 px-2 rounded-md shadow-2xl shadow-[#0D0A2C] w-full cursor-pointer">
                        <div class="w-5 h-5 bg-[#FBBF24] rounded-sm"></div>
                        <div class="text-gray-2">14% Rescue and Rehabilitation</div>
                    </button>
                    <button id="pie-chart-5" data-modal-target="pie-profile" data-modal-toggle="pie-profile" class="flex items-center justify-start space-x-1.5 bg-white py-1.5 px-2 rounded-md shadow-2xl shadow-[#0D0A2C] w-full cursor-pointer">
                        <div class="w-5 h-5 bg-[#8646F4] rounded-sm"></div>
                        <div class="text-gray-2">5% Pet Food Bank</div>
                    </button>
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

<div id="pie-profile" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white shadow">
            <div class="flex items-center bg-white py-5 px-4">
                <button class="cursor-pointer w-10" data-modal-hide="pie-profile">
                    <img src="./assets/images/chevron-left.svg" alt="">
                </button>
                <h3 class="flex-grow font-bold leading-6 text-center -ml-5">2022 Activities and Outcomes</h3>
            </div>


            <div class="py-4 bg-gray-3">
                <div class="flex items-center px-1.5">
                    <div onclick="changeItem('prev')">
                        <img src="./assets/images/arrow-left-v2.svg" alt="" class="w-[38px]">
                    </div>
                    <div class="flex items-center justify-center">
                        <img id="pie-image" src="./assets/images/dm-pie-1.png" alt="" class="flex items-center justify-center w-9/12">
                    </div>
                    <div onclick="changeItem('next')">
                        <img src="./assets/images/arrow-right-v2.svg" alt="" class="w-[38px]">
                    </div>
                </div>

                <div class="mt-4 px-4">
                    <a id="real-label" href="#" class="flex items-center justify-start space-x-1.5 bg-white py-1.5 px-3 rounded-md shadow-2xl shadow-[#0D0A2C] w-full cursor-pointer">
                        <div id="label-color" class="w-5 h-5 rounded-sm"></div>
                        <div id="label" class="text-gray-2">39% Adoption and Shelter Services</div>
                    </a>
                </div>
            </div>

            <div class="bg-white pt-5 pb-10 px-4">
                <div class="space-y-4">
                    <div>
                        <h4 class="text-gray-2 font-bold">Description</h4>
                        <p id="description" class="mt-2 text-gray-2">Central to the mission, this program facilitates the matching of animals with loving families, ensuring a smooth adoption process.</p>
                    </div>
                    <div>
                        <h4 class="text-gray-2 font-bold">Activities</h4>

                        <div id="activities-list" class="mt-2"></div>
                    </div>
                    <div>
                        <h4 class="text-gray-2 font-bold">Outcomes</h4>
                        <div id="outcomes-list" class="mt-4 space-y-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./assets/js/custom-chart.js"></script>
<script src="./assets/js/pie-chart.js"></script>

</body>
</html>