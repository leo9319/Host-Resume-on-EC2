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
    <title>Harmony Haven Toronto | Impacts</title>
</head>
<body>
<div class="max-w-2xl mx-auto bg-gray-3">
    <div class="flex items-center bg-white py-5 px-4">
        <button class="cursor-pointer w-10" onclick="goBack()">
            <img src="./assets/images/chevron-left.svg" alt="">
        </button>
        <h3 class="flex-grow font-bold leading-6 text-center -ml-5">Harmony Haven Toronto</h3>
    </div>
    <div class="container px-4 py-4">
        <img src="./assets/images/doggy.jpg" alt="">
        <div class="mt-4">
            <h3 class="font-bold text-gray-2">2023 Impact Results</h3>
        </div>
        <div class="mt-4 space-y-3">
            <div class="text-center">
                <div class="card-light">
                    <h4 class="text-3xl font-bold text-black-2">2,150</h4>
                    <p class="mt-1 text-black-2">Animals found new homes</p>
                </div>
            </div>
            <div class="text-center">
                <div class="card-light">
                    <h4 class="text-3xl font-bold text-black-2">1,700</h4>
                    <p class="mt-1 text-black-2">Animals stayed in our foster home while waiting to get adopted </p>
                </div>
            </div>
            <div class="text-center">
                <div class="card-light">
                    <h4 class="text-3xl font-bold text-black-2">4,400</h4>
                    <p class="mt-1 text-black-2">Pet families supported through Pet Parent Support Network</p>
                </div>
            </div>
            <div class="text-center">
                <div class="card-light">
                    <h4 class="text-3xl font-bold text-black-2">7,230</h4>
                    <p class="mt-1 text-black-2">Animals helped through public veterinary services</p>
                </div>
            </div>
            <div class="text-center">
                <div class="card-light">
                    <h4 class="text-3xl font-bold text-black-2">48,120</h4>
                    <p class="mt-1 text-black-2">Pounds pet food distributed through our Pet Food Bank</p>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h3 class="font-bold text-gray-2">Our Programs</h3>
            <?php include('./partials/our-programs.php') ?>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./assets/js/custom-chart.js"></script>
</body>
</html>