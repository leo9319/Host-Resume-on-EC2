<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donate</title>
    <link rel="stylesheet" href="./assets/css/output.css">
</head>
<body>
<div class="container mx-auto flex flex-col h-screen px-4">
    <div class="mt-8 pb-36">
        <h1 class="font-bold text-3xl">Let’s Get Started</h1>
        <div class="mt-5 bg-gray-4 px-4 py-4 rounded-lg">
            <h3 class="font-bold">Context: </h3>
            <p>You have an extra $200.00 from your tax return to use. As you consider how to spend the money, you come across Harmony Haven's charity work.</p>
            <div class="mt-4">
                <h3 class="font-bold">Instructions:</h3>
                <ol class="list-decimal list-inside">
                    <li>Take a moment to look through Harmony Haven's website.</li>
                    <li>Feel inspired to support our cause? Click 'Donate' to contribute.</li>
                    <li>If you decide not to donate at this time, simply click 'Exit'.</li>
                </ol>
                <div class="mt-4">
                    <h3 class="font-bold">Important Note:</h3>
                    <p class="font-bold">Please approach this survey as if you are highly interested in animal welfare. Focus on assessing the experience with the prototype, not on the cause or design aspects.</p>
                </div>

                <p class="mt-6">Thank you for your valuable participation!</p>
            </div>
        </div>
        <div class="mt-5 flex items-start space-x-4 px-4">
            <input type="checkbox" class="w-6 h-6" id="instructionsCheckbox">
            <p>I have read and understood the instructions above*</p>
        </div>
    </div>

    <?php
    function getQueryParam($name) {
        return isset($_GET[$name]) ? $_GET[$name] : null;
    }

    $rival_id = getQueryParam('rival_id');
    $experiment_id = getQueryParam('experiment_id');

    //Set session variables
    $_SESSION["rival_id"] = $rival_id;
    $_SESSION["experiment_name"] = $experiment_id;

    $buttonUrl = '/experiment_one/' . $experiment_id . '.php?rival_id=' . $rival_id;
    ?>

    <button id="proceedButton" class="fixed bottom-5 bg-blue-1 w-11/12 text-white py-4 mx-auto left-0 right-0 disabled:bg-gray-400 disabled:cursor-not-allowed" disabled onclick="proceedToSite()">Proceed to Harmony Haven Site</button>

    <script>
        // Get references to the checkbox and button
        const instructionsCheckbox = document.getElementById('instructionsCheckbox');
        const proceedButton = document.getElementById('proceedButton');

        // Function to navigate to the button URL
        function proceedToSite() {
            const rival_id = "<?php echo $rival_id; ?>";
            const experiment_id = "<?php echo $experiment_id; ?>";


            let protocol = window.location.protocol;
            let buttonUrl = ''

            // Check if it's using HTTP or HTTPS
            if (protocol === "http:") {
                buttonUrl = '/' + experiment_id + '.php?rival_id=' + rival_id;
            } else if (protocol === "https:") {
                buttonUrl = '/experiment_one/' + experiment_id + '.php?rival_id=' + rival_id;
            } else {
                // console.log("The protocol is neither HTTP nor HTTPS.");
            }

            window.location.href = buttonUrl;
        }

        // Add an event listener to the checkbox
        instructionsCheckbox.addEventListener('change', function () {
            // Update the button's 'disabled' property based on the checkbox's 'checked' state
            proceedButton.disabled = !instructionsCheckbox.checked;
        });
    </script>
</div>

</body>
</html>
