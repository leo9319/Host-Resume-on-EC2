<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/output.css">
    <title>Home | Experiment 1</title>
    <!-- Hotjar Tracking Code for https://experiments.universal-giving.org/ -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 3735714, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
<!--    <script>-->
<!--        var userId = "puppies"-->
<!--        window.hj('identify', userId, {});-->
<!--    </script>-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap');
    </style>
    <script src="node_modules/preline/dist/preline.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css"/>
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
                <ul class="flex flex-wrap -mb-px justify-between px-5" id="myTab" data-tabs-toggle="#myTabContent"
                    role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active"
                                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="true">Overview
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                                id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Impact
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                                aria-controls="contacts" aria-selected="false">Supporters
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div id="myTabContent">
            <div class="p-4 pb-24" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="space-y-4">
                    <div>
                        <h3 class="font-bold leading-6">Who we are</h3>
                        <p class="mt-2 text-gray-2">
                            Harmony Haven excels in all ways an animal shelter should. With industry leading shelter care, animal training and behavioural consultations, and veterinary services, we have found new homes for thousands of animals and helped keep families together.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-bold leading-6">What we do</h3>
                        <p class="mt-2 text-gray-2">
                            <div class="flex mb-2">
                                <div class="w-1/12 flex items-center justify-start">
                                    <img src="./assets/images/ellipsis.png" alt="">
                                </div>
                                <span class="text-gray-2 w-11/12 -ml-2">Rescuing, rehabilitating, and rehoming animals in need.</span>
                            </div>
                            <div class="flex mb-2">
                                <div class="w-1/12 flex items-center justify-start">
                                    <img src="./assets/images/ellipsis.png" alt="">
                                </div>
                                <span class="text-gray-2 w-11/12 -ml-2">Promoting responsible pet ownership through awareness campaigns and education.</span>
                            </div>
                            <div class="flex mb-2">
                                <div class="w-1/12 flex items-center justify-start">
                                    <img src="./assets/images/ellipsis.png" alt="">
                                </div>
                                <span class="text-gray-2 w-11/12 -ml-2">Advocating for humane legislation.</span>
                            </div>
                            <div class="flex mb-2">
                                <div class="w-1/12 flex items-center justify-start">
                                    <img src="./assets/images/ellipsis.png" alt="">
                                </div>
                                <span class="text-gray-2 w-11/12 -ml-2">Hosting adoption events.</span>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="p-4 pb-24 hidden bg-gray-3" id="settings" role="tabpanel" aria-labelledby="settings-tab">
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
                    <div class="grid max-w-xl mx-auto mt-8">
                        <div class="py-2">
                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none border border-gray-1 rounded-lg py-3 px-4 bg-white">
                                    <span class="text-gray-2">Adoption and Rehoming</span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="./assets/images/chevron.svg" alt="">
                                    </span>
                                </summary>
                                <p class="text-gray-2 group-open:animate-fadeIn bg-white p-4 mx-0.5">
                                    Making room in your life and a place in your
                                    home for an animal will create a connection
                                    that will change both of you. We’re here from
                                    day one to be part of your amazing journey
                                    together.
                                    Visit https://
                                    www.torontohumanesociety.com/
                                    adoption-and-rehoming/adopt
                                    to view our animals currently looking for
                                    their forever homes.
                                </p>
                            </details>
                        </div>
                        <div class="py-2">
                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none border border-gray-1 rounded-lg py-3 px-4 bg-white">
                                    <span class="text-gray-2">Spay/Neuter Services</span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="./assets/images/chevron.svg" alt="">
                                    </span>
                                </summary>
                                <p class="text-gray-2 group-open:animate-fadeIn bg-white p-4 mx-0.5">
                                    Our clinic operates through a social
                                    enterprise model. Our fee structure is
                                    set so that we can best serve all pet
                                    parents in-need, through the provision
                                    of high-quality, high-volume services.
                                    Visit https://
                                    www.torontohumanesociety.com/pet-
                                    services/vet-services/spay-neuter-
                                    services to learn how to book an
                                    appointment.
                                </p>
                            </details>
                        </div>
                        <div class="py-2">
                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none border border-gray-1 rounded-lg py-3 px-4 bg-white">
                                    <span class="text-gray-2">Trap Neuter Return (TNR)</span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="./assets/images/chevron.svg" alt="">
                                    </span>
                                </summary>
                                <p class="text-gray-2 group-open:animate-fadeIn bg-white p-4 mx-0.5">
                                    As a member of the Toronto Feral Cat
                                    Coalition, the Toronto Humane Society
                                    is committed to offering support for the
                                    city and surrounding cities’ feral cat
                                    populations and their colony
                                    caretakers. Visit https://
                                    www.torontohumanesociety.com/pet-
                                    services/vet-services/trap-neuter-
                                    return for more information on this
                                    program.
                                </p>
                            </details>
                        </div>
                        <div class="py-2">
                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none border border-gray-1 rounded-lg py-3 px-4 bg-white">
                                    <span class="text-gray-2">Pet Food Bank</span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="./assets/images/chevron.svg" alt="">
                                    </span>
                                </summary>
                                <p class="text-gray-2 group-open:animate-fadeIn bg-white p-4 mx-0.5">
                                    We recognize that families temporarily
                                    face difficult financial times and may
                                    require assistance. We believe that no
                                    one should face the difficult decision of
                                    having to surrender their pet because
                                    they cannot afford the cost of food.
                                    Visit https://
                                    www.torontohumanesociety.com/
                                    support-us/become-an-advocate/in
                                    -the-community for information.
                                </p>
                            </details>
                        </div>
                        <div class="py-2">
                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none border border-gray-1 rounded-lg py-3 px-4 bg-white">
                                    <span class="text-gray-2">Wellness and Preventative Services</span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="./assets/images/chevron.svg" alt="">
                                    </span>
                                </summary>
                                <p class="text-gray-2 group-open:animate-fadeIn bg-white p-4 mx-0.5">
                                    Affordability of pet care is the largest
                                    barrier that pet parents face when
                                    trying to provide for their animal. It's
                                    with this understanding that we have
                                    built our operations to help overcome
                                    this hurdle and help keep pets with
                                    their families. Visit https://
                                    www.torontohumanesociety.com/pet-
                                    services/vet-services/wellness-and-
                                    preventative-services
                                </p>
                            </details>
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
            <div class="pb-24 hidden bg-gray-3 py-4" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <div class="space-y-2">
                    <div class="flex space-x-4 p-4 mx-4 bg-white rounded-xl">
                        <div class="w-1/6">
                            <img src="./assets/images/devid.png" alt="">
                        </div>
                        <div class="w-5/6 flex flex-col text-sm">
                            <h5 class="font-[500]">Devid Milinear donated $10</h5>
                            <p class="mt-1 text-gray-2">I'm so appreciative of the wonderful work you do for lost, abused, abandoned, sick or injured animals.</p>
                        </div>
                    </div>
                    <div class="flex space-x-4 p-4 mx-4 bg-white rounded-xl">
                        <div class="w-1/6">
                            <img src="./assets/images/tg.png" alt="">
                        </div>
                        <div class="w-5/6 flex flex-col text-sm">
                            <h5 class="font-[500]">Tomas Gonzales donated $50</h5>
                            <p class="mt-1 text-gray-2">I'm so appreciative of the wonderful work you do for lost, abused, abandoned, sick or injured animals.</p>
                        </div>
                    </div>
                    <div class="flex space-x-4 p-4 mx-4 bg-white rounded-xl">
                        <div class="w-1/6">
                            <img src="./assets/images/melanie.png" alt="">
                        </div>
                        <div class="w-5/6 flex flex-col text-sm">
                            <h5 class="font-[500]">Melanie Lee donated $5</h5>
                            <p class="mt-1 text-gray-2">I'm so appreciative of the wonderful work you do for lost, abused, abandoned, sick or injured animals.</p>
                        </div>
                    </div>
                    <div class="flex space-x-4 p-4 mx-4 bg-white rounded-xl">
                        <div class="w-1/6">
                            <img src="./assets/images/a.png" alt="">
                        </div>
                        <div class="w-5/6 flex flex-col text-sm">
                            <h5 class="font-[500]">Anonymous donated $200</h5>
                            <p class="mt-1 text-gray-2">Thank you for all you do for our furry companions!</p>
                        </div>
                    </div>
                    <div class="flex space-x-4 p-4 mx-4 bg-white rounded-xl">
                        <div class="w-1/6">
                            <img src="./assets/images/lh.png" alt="">
                        </div>
                        <div class="w-5/6 flex flex-col text-sm">
                            <h5 class="font-[500]">Logan Hudson</h5>
                            <p class="mt-1 text-gray-2">Thank you for all you do for our furry companions!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="fixed bottom-5 bg-blue-1 w-11/12 text-white py-4 mx-auto left-0 right-0">Donate</button>

</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2019', '2020', '2021'],
            datasets: [
                {
                    label: 'Programs',
                    data: [10, 10, 10],
                    backgroundColor: '#2D68F8',
                },
                {
                    label: 'Fundraising',
                    data: [2, 2, 2],
                    backgroundColor: '#8646F4',
                },
                {
                    label: 'Management & Admin',
                    data: [1, 1, 1],
                    backgroundColor: '#D345F8',
                },
                {
                    label: 'Other',
                    data: [0, 0, 0.5],
                    backgroundColor: '#01A9DB',
                }
            ]
        },
        options: {
            plugins: {
                title: {
                    display: false,
                    text: 'Chart.js Bar Chart - Stacked'
                },
                legend: {
                    position: 'bottom',
                    align: 'start',
                    usePointStyle: true, // Set to true to use point style (square)
                    labels: {
                        boxWidth: 12, // Adjust the box width as needed
                    }
                },
            },
            responsive: true,
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true,
                    ticks: {
                        callback: function (value) {
                            return value + ' M';
                        }
                    }
                }
            }
        }
    });
</script>
</body>
</html>