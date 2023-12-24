<?php
// Get the slug from the query parameter
$location = isset($_GET['location']) ? $_GET['location'] : null;

if ($location) {
    // Load the JSON file
    $jsonFile = file_get_contents('./assets/charity.json');

    // Decode the JSON data
    $jsonData = json_decode($jsonFile, true);

    // Search for the object with the matching slug
    $result = null;
    foreach ($jsonData as $item) {
        if (isset($item['location']) && $item['location'] === $location) {
            $result = $item;
            break;
        }
    }

    if ($result) {
        //
    } else {
        echo 'Object not found for slug: ' . $location;
    }
} else {
    echo 'Slug parameter is missing.';
}
?>

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
        <h3 class="flex-grow font-bold leading-6 text-center -ml-5"><?php echo $result['title']; ?></h3>
    </div>
    <div class="container px-4 py-4">
        <img src="./assets/images/<?php echo $result['image']; ?>" alt="">
        <div class="mt-4">
            <h3 class="font-bold text-gray-2">2023 Impact Results</h3>
        </div>
        <div class="mt-4 space-y-3">
            <?php foreach ($result['results'] as $impact) : ?>
                <div class="text-center">
                    <div class="card-light">
                        <h4 class="text-3xl font-bold text-black-2"><?php echo number_format($impact['amount']); ?></h4>
                        <p class="mt-1 text-black-2"><?php echo $impact['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
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
<script src="./assets/js/go-back.js"></script>
</body>
</html>