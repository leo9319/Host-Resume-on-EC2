<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/output.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css' rel='stylesheet' />
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
            <div class="hidden bg-gray-3" id="impact" role="tabpanel" aria-labelledby="impact-tab">
                <div class="px-4" id="slide-container" style="opacity: 0; max-height: 0; overflow: hidden; transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;">
                    <div class="pb-5">
                        <button id="charity-profile-toronto" data-modal-target="charity-profile" data-modal-toggle="charity-profile" class="hidden" type="button"></button>
                        <button id="cat-profile" data-modal-target="cat-profile-modal" data-modal-toggle="cat-profile-modal" class="hidden" type="button"></button>
                        <button id="cat-profile-calgary" data-modal-target="cat-profile-cal-modal" data-modal-toggle="cat-profile-cal-modal" class="hidden" type="button"></button>
                        <h3 class="mt-4">Viewing</h3>
                        <select onchange="updateMarkers(this.value)" id="countries_disabled" class="mt-1.5 py-3 px-2.5 pt-2.5 border border-gray-1 text-gray-2 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                            <option selected value="hh">Harmony Haven Locations</option>
                            <option value="pa">Pets Adopted (November, 2023)</option>
                        </select>
                    </div>
                </div>
                <div id='map' class="w-full h-[32rem]"></div>
            </div>
            <div class="p-4 pb-24 hidden bg-gray-3" id="stories" role="tabpanel" aria-labelledby="stories-tab">
                <?php include('partials/stories.php'); ?>
            </div>
            <div class="pb-24 hidden bg-gray-3 py-4" id="supporters" role="tabpanel" aria-labelledby="supporters-tab">
                <?php include('partials/supporters.php'); ?>
            </div>
        </div>
    </div>
    <!-- Main modal -->
    <div id="select-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Open positions
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="select-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <p class="text-gray-500 dark:text-gray-400 mb-4">Select your desired position:</p>
                    <ul class="space-y-4 mb-4">
                        <li>
                            <input type="radio" id="job-1" name="job" value="job-1" class="hidden peer" required>
                            <label for="job-1" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">UI/UX Engineer</div>
                                    <div class="w-full text-gray-500 dark:text-gray-400">Flowbite</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="job-2" name="job" value="job-2" class="hidden peer">
                            <label for="job-2" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">React Developer</div>
                                    <div class="w-full text-gray-500 dark:text-gray-400">Alphabet</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="job-3" name="job" value="job-3" class="hidden peer">
                            <label for="job-3" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Full Stack Engineer</div>
                                    <div class="w-full text-gray-500 dark:text-gray-400">Apple</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                            </label>
                        </li>
                    </ul>
                    <button class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Next step
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php include('partials/floating-buttons.php'); ?>
</div>

<?php include('partials/charity-profile-toronto.php'); ?>
<?php include('partials/cat-profile-toronto.php'); ?>
<?php include('partials/cat-profile-calgary.php'); ?>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibGVvOTMxOSIsImEiOiJjbHBoZjhycmIwMXJjMndsZGUyZGE2ZHh1In0.f5AdNGxCV75uz7h7D37gnQ';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/leo9319/clpihh3q300c101qm1kt917mo', // style URL
        center: [-74.5, 40], // starting position [lng, lat]
        zoom: 1, // starting zoom
    });

    map.on('load', function () {
        // setTimeout(() => {
        //     map.resize();
        // }, 1000);

        map.resize();

        map.easeTo({
            center: [-95.3832, 55.6532],
            zoom: 2,
            duration: 3000, // Animation duration in milliseconds
        });

        addHarmonyHavenMarkers(map);
    });

    let markers = [];

    function updateMarkers(option) {
        map.resize();
        map.setStyle('mapbox://styles/leo9319/clpihh3q300c101qm1kt917mo');
        map.setCenter([-95.3832, 43.6532]);
        map.setZoom(2);

        removeMarkers();

        if (option === 'hh') {
            addHarmonyHavenMarkers(map);
        } else if (option === 'pa') {
            addPetsAdoptedMarkers(map);
        }
    }

    function createCustomMarker(type) {
        const el = document.createElement('div');
        console.log(type)
        el.className = type;
        return el;
    }

    function addHarmonyHavenMarkers(map) {
        const torontoMarkerHH = new mapboxgl.Marker({
            element: createCustomMarker('marker-hh'),
        })
            .setLngLat([-79.3832, 43.6532])
            .addTo(map)

        const calgaryMarkerHH = new mapboxgl.Marker({
            element: createCustomMarker('marker-hh'),
        })
            .setLngLat([-114.0719, 51.0447])
            .addTo(map)

        // Add click event listener to the marker elements
        torontoMarkerHH.getElement().addEventListener('click', () => {
            // navigateToPage('charity-profile.php', { location: 'calgary' });
            document.getElementById('charity-profile-toronto').click();

            document.getElementById('charity-image').src = './assets/images/little-kitty.jpg';
            document.getElementById('title').innerHTML = 'Harmony Haven Toronto';
            document.getElementById('fig-1').innerHTML = '2,456';
            document.getElementById('fig-2').innerHTML = '1,870';
            document.getElementById('fig-3').innerHTML = '4,345';
            document.getElementById('fig-4').innerHTML = '7,320';
            document.getElementById('fig-5').innerHTML = '50,120';
        });

        calgaryMarkerHH.getElement().addEventListener('click', () => {
            // navigateToPage('charity-profile.php', { location: 'toronto' });
            document.getElementById('charity-profile-toronto').click();

            document.getElementById('charity-image').src = './assets/images/doggy.jpg';
            document.getElementById('title').innerHTML = 'Harmony Haven Calgary';
            document.getElementById('fig-1').innerHTML = '2,150';
            document.getElementById('fig-2').innerHTML = '1,700';
            document.getElementById('fig-3').innerHTML = '4,400';
            document.getElementById('fig-4').innerHTML = '7,320';
            document.getElementById('fig-5').innerHTML = '48,120';
        });

        markers.push(torontoMarkerHH, calgaryMarkerHH);
    }

    function addPetsAdoptedMarkers(map) {
        const torontoMarkerPA = new mapboxgl.Marker({
            element: createCustomMarker('calgary-pa-21'),
        })
            .setLngLat([-71.2080, 46.8139])
            .addTo(map)

        const calgaryMarkerPA = new mapboxgl.Marker({
            element: createCustomMarker('calgary-pa-17'),
        })
            .setLngLat([-118.2437, 49.2827])
            .addTo(map);

        // Add click event listener to the marker elements
        torontoMarkerPA.getElement().addEventListener('click', () => {
            document.getElementById('cat-profile').click();

        });

        calgaryMarkerPA.getElement().addEventListener('click', () => {
            document.getElementById('cat-profile-calgary').click();

        });

        markers.push(torontoMarkerPA, calgaryMarkerPA);
    }


    function removeMarkers() {
        markers.forEach(marker => marker.remove());
        markers = [];
    }

    function navigateToPage(page, queryParams) {
        const queryString = Object.keys(queryParams)
            .map(key => `${encodeURIComponent(key)}=${encodeURIComponent(queryParams[key])}`)
            .join('&');

        const targetUrl = queryString ? `${page}?${queryString}` : page;

        // Navigate to the target page
        window.location.href = targetUrl;
    }

</script>
<script>
    setTimeout(function() {
        var slideContainer = document.getElementById('slide-container');
        slideContainer.style.opacity = '1';
        slideContainer.style.maxHeight = '200px';
    }, 2000);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>