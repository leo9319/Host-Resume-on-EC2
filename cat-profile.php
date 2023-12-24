<?php
// Get the slug from the query parameter
$slug = isset($_GET['slug']) ? $_GET['slug'] : null;

if ($slug) {
    // Load the JSON file
    $jsonFile = file_get_contents('./assets/cat.json');

    // Decode the JSON data
    $jsonData = json_decode($jsonFile, true);

    // Search for the object with the matching slug
    $result = null;
    foreach ($jsonData as $item) {
        if (isset($item['slug']) && $item['slug'] === $slug) {
            $result = $item;
            break;
        }
    }

    if ($result) {

    } else {
        echo 'Object not found for slug: ' . $slug;
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
    <title>Cat Profile | Experiment 1</title>
</head>
<body>
<div class="max-w-2xl mx-auto">
    <div class="flex items-center bg-white py-5 px-4">
        <button class="cursor-pointer w-10" onclick="goBack()">
            <img src="./assets/images/chevron-left.svg" alt="">
        </button>
        <h3 class="flex-grow font-bold leading-6 text-center -ml-5"><?php echo $result['name'] ?></h3>
    </div>
    <div class="container px-4 py-4 bg-gray-3">
        <img src="./assets/images/<?php echo $result['image'] ?>" alt="">
        <p class="mt-3 font-bold"><?php echo $result['title'] ?></p>
        <p class="mt-3 text-gray-2">
            <?php echo $result['body'] ?>
        </p>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="./assets/js/go-back.js"></script>
</body>
</html>