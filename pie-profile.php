<?php session_start(); ?>

<?php
// Get the slug from the query parameter
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    // Load the JSON file
    $jsonFile = file_get_contents('./assets/data-model.json');

    // Decode the JSON data
    $jsonData = json_decode($jsonFile, true);

    // Search for the object with the matching slug
    $result = null;
    foreach ($jsonData as $item) {
        if (isset($item['id']) && $item['id'] === $id) {
            $result = $item;
            break;
        }
    }

    if ($result) {
        //
    } else {
        echo 'Object not found for slug: ' . $id;
    }
} else {
    echo 'Id parameter is missing.';
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
    <title>Home | Experiment 1</title>
</head>
<body>
<div class="max-w-2xl mx-auto">
    <div class="flex items-center bg-white py-5 px-4 border-b border-gray-1">
        <button class="cursor-pointer w-10" onclick="window.location='/experiment_one/739659.php'">
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
                <img src="./assets/images/<?php echo $result['image']; ?>" alt="" class="flex items-center justify-center w-9/12">
            </div>
            <div onclick="changeItem('next')">
                <img src="./assets/images/arrow-right-v2.svg" alt="" class="w-[38px]">
            </div>
        </div>


        <div class="mt-4 px-4">
            <a href="#" class="flex items-center justify-start space-x-1.5 bg-white py-1.5 px-3 rounded-md shadow-2xl shadow-[#0D0A2C] w-full cursor-pointer">
                <div class="w-5 h-5 bg-[<?php echo $result['color']; ?>] rounded-sm"></div>
                <div class="text-gray-2"><?php echo $result['label']; ?></div>
            </a>
        </div>
    </div>

    <div class="bg-white pt-5 pb-10 px-4">
        <div class="space-y-4">
            <div>
                <h4 class="text-gray-2 font-bold">Description</h4>
                <p class="mt-2 text-gray-2"><?php echo $result['description']; ?></p>
            </div>
            <div>
                <h4 class="text-gray-2 font-bold">Activities</h4>

                <div class="mt-2">
                    <?php foreach ($result['activities'] as $activity): ?>
                        <div class="flex mb-1">
                            <div class="w-1/12 flex items-center justify-start">
                                <img src="./assets/images/ellipsis.png" alt="">
                            </div>
                            <span class="text-gray-2 w-11/12 -ml-2"><?php echo $activity; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <h4 class="text-gray-2 font-bold">Outcomes</h4>
                <div class="mt-4 space-y-5">
                    <?php foreach ($result['outcomes'] as $outcome): ?>
                        <div class="card border-gray-1 text-left px-4">
                            <h4 class="text-3xl font-bold text-black-2"><?php echo $outcome['amount']; ?></h4>
                            <p class="mt-2 text-black-2"><?php echo $outcome['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script>
    function changeItem(direction) {
        // Get the current id
        var currentId = <?php echo json_encode($result['id']); ?>;
        // Get the array of all ids
        var allIds = <?php echo json_encode(array_column($jsonData, 'id')); ?>;
        // Find the index of the current id
        var currentIndex = allIds.indexOf(currentId);

        // Calculate the new index based on the direction
        var newIndex = direction === 'next' ? (currentIndex + 1) % allIds.length : (currentIndex - 1 + allIds.length) % allIds.length;

        // Get the new id
        var newId = allIds[newIndex];

        // Redirect to the new id
        window.location.href = 'pie-profile.php?id=' + newId;
    }
</script>

</body>
</html>