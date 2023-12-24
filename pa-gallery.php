<?php
// Get the slug from the query parameter
$location = isset($_GET['location']) ? $_GET['location'] : null;

if ($location) {
    // Load the JSON file
    $jsonFile = file_get_contents('./assets/pa-pets.json');

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
    <title>Recently Adopted Companions | Calgary</title>
</head>
<body>
<div class="max-w-2xl mx-auto">
    <div class="flex items-center py-5 border-b border-gray-1 px-4">
        <button class="cursor-pointer w-10" onclick="goBack()">
            <img src="./assets/images/chevron-left.svg" alt="">
        </button>
        <h3 class="flex-grow font-bold leading-6 text-center -ml-5 capitalize"><?php echo ($result['location']); ?>, Ontario</h3>
    </div>
    <div class="mt-4 px-4">
        <h3 class="font-bold text-gray-2">Recently Adopted Companions</h3>

        <div class="mt-3 grid grid-cols-2 gap-4">

            <?php foreach ($result['pets'] as $pet) : ?>
                <img src="./assets/images/<?php echo ($pet['image']); ?>" alt="">
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="./assets/js/go-back.js"></script>
</body>
</html>