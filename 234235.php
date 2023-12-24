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
            experiment_name: 'control-v2'
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
            <div class="p-4 pb-24 hidden bg-gray-3" id="impact" role="tabpanel" aria-labelledby="impact-tab">
                <div class="space-y-3">
                    <h3 class="font-bold leading-6 pb-3 text-black">Our Results</h3>
                    <div class="text-center">
                        <div class="card">
                            <h4 class="text-3xl font-bold text-black-2">42 000</h4>
                            <p class="font-medium text-black-2">Pounds of Pet Food</p>
                        </div>
                        <p class="text-xs py-3 text-gray-2">Our Pet Food Banks saw record numbers! In 2021, we provided over 42,000 lbs of pet food to families in need.</p>
                    </div>
                    <div class="text-center">
                        <div class="card">
                            <h4 class="text-3xl font-bold text-black-2">3 000</h4>
                            <p class="font-medium text-black-2">Pet Parents Supported</p>
                        </div>
                        <p class="text-xs py-3 text-gray-2">More than 3,000 pet parents were supported through our Pet Parent Support Network.</p>
                    </div>
                    <div class="text-center">
                        <div class="card">
                            <h4 class="text-3xl font-bold text-black-2">500</h4>
                            <p class="font-medium text-black-2">Families Through Public Training</p>
                        </div>
                        <p class="text-xs py-3 text-gray-2">Our Pet Food Banks saw record numbers! In 2021, we provided over 42,000 lbs of pet food to families in need.</p>
                    </div>
                    <div class="text-center">
                        <div class="card">
                            <h4 class="text-3xl font-bold text-black-2">1,500</h4>
                            <p class="font-medium text-black-2">Adopted into New Homes</p>
                        </div>
                        <p class="text-xs py-3 text-gray-2">Over 1,500 animals were adopted into new homes.</p>
                    </div>
                    <div class="text-center">
                        <div class="card">
                            <h4 class="text-3xl font-bold text-black-2">200</h4>
                            <p class="font-medium text-black-2">Urgent Foster Care Animals</p>
                        </div>
                        <p class="text-xs py-3 text-gray-2">Over 200 animals were cared for through our Urgent Foster Care Program while their parents got back on their feet.</p>
                    </div>
                    <div class="text-center">
                        <div class="card">
                            <h4 class="text-3xl font-bold text-black-2">1 500</h4>
                            <p class="font-medium text-black-2">Animals Fostered</p>
                        </div>
                        <p class="text-xs py-3 text-gray-2">Over 1,500 animals were given temporary shelter through foster care.</p>
                    </div>
                    <h3 class="font-bold leading-6 pb-3 text-black">Our Programs</h3>
                    <div class="grid mx-auto mt-8">
                        <div class="py-2">
                            <div id="accordion-collapse" data-accordion="collapse" class="space-y-2">
                                <div>
                                    <h2 id="accordion-collapse-heading-1">
                                        <button type="button" class="flex items-center justify-between w-full py-3 px-5 font-light border border-gray-1 rounded-lg rtl:text-right bg-white text-gray-500 hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                                            <span>Adoption and Rehoming</span>
                                            <img src="./assets/images/chevron.svg" alt="">
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                        <div class="p-5 bg-white">
                                            <p class="mb-2 text-gray-2">
                                                Making room in your life and a place in your
                                                home for an animal will create a connection
                                                that will change both of you. We’re here from
                                                day one to be part of your amazing journey
                                                together.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 id="accordion-collapse-heading-2">
                                        <button type="button" class="flex items-center justify-between w-full py-3 px-5 font-light border border-gray-1 rounded-lg rtl:text-right bg-white text-gray-500 hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                            <span>Spay/Neuter Services</span>
                                            <img src="./assets/images/chevron.svg" alt="">
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                        <div class="p-5 bg-white">
                                            <p class="mb-2 text-gray-2">
                                                Our clinic operates through a social
                                                enterprise model. Our fee structure is
                                                set so that we can best serve all pet
                                                parents in-need, through the provision
                                                of high-quality, high-volume services.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 id="accordion-collapse-heading-3">
                                        <button type="button" class="flex items-center justify-between w-full py-3 px-5 font-light border border-gray-1 rounded-lg rtl:text-right bg-white text-gray-500 hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                            <span>Trap Neuter Return (TNR)</span>
                                            <img src="./assets/images/chevron.svg" alt="">
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                                        <div class="p-5 bg-white">
                                            <p class="mb-2 text-gray-2">
                                                As a member of the Toronto Feral Cat
                                                Coalition, the Toronto Humane Society
                                                is committed to offering support for the
                                                city and surrounding cities’ feral cat
                                                populations and their colony
                                                caretakers.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 id="accordion-collapse-heading-4">
                                        <button type="button" class="flex items-center justify-between w-full py-3 px-5 font-light border border-gray-1 rounded-lg rtl:text-right bg-white text-gray-500 hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                                            <span>Pet Food Bank</span>
                                            <img src="./assets/images/chevron.svg" alt="">
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                                        <div class="p-5 bg-white">
                                            <p class="mb-2 text-gray-2">
                                                We recognize that families temporarily
                                                face difficult financial times and may
                                                require assistance. We believe that no
                                                one should face the difficult decision of
                                                having to surrender their pet because
                                                they cannot afford the cost of food.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 id="accordion-collapse-heading-5">
                                        <button type="button" class="flex items-center justify-between w-full py-3 px-5 font-light border border-gray-1 rounded-lg rtl:text-right bg-white text-gray-500 hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                                            <span>Wellness and Preventative Services</span>
                                            <img src="./assets/images/chevron.svg" alt="">
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                                        <div class="p-5 bg-white">
                                            <p class="mb-2 text-gray-2">
                                                Affordability of pet care is the largest
                                                barrier that pet parents face when
                                                trying to provide for their animal. It's
                                                with this understanding that we have
                                                built our operations to help overcome
                                                this hurdle and help keep pets with
                                                their families.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="font-bold leading-6 pb-3 text-black">Supporting Information</h3>
                    <div>
                        <h4 class="text-gray-2 font-[500]">Revenue and Expenses by Year ($)</h4>
                        <h5 class="text-sm text-gray-2 mt-1">Reporting Period End Date: 2021-12-31</h5>
                    </div>
                    <canvas id="myChart"></canvas>
                    <div class="text-center space-y-4">
                        <div class="card">
                            <div class="flex justify-center">
                                <p class="text-lg">
                                    <span class="font-semibold">170</span>
                                    <span class="pl-1.5">Full-time Employees</span>
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="flex justify-center">
                                <p class="text-lg">
                                    <span class="font-semibold">53</span>
                                    <span class="pl-1.5">Part-time Employees</span>
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <h4 class="text-lg font-bold text-black-2">$9,242,509</h4>
                            <p class="text-black-2">Adopted into New Homes</p>
                        </div>
                        <div class="card">
                            <h4 class="text-lg font-bold text-black-2">$277,906</h4>
                            <p class="text-black-2">Professional & Consulting Fees</p>
                        </div>
                        <p class="text-xs py-3 text-gray-2">*Based on information provided by Canada Revenue Agency (CRA)</p>
                    </div>
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
<script src="./assets/js/custom-chart.js"></script>
</body>
</html>