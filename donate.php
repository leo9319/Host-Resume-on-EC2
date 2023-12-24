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

<div class="flex items-center py-5  border-b border-gray-1 px-4">
    <button class="cursor-pointer w-10" onclick="goBack()">
        <img src="./assets/images/chevron-left.svg" alt="">
    </button>
    <h3 class="flex-grow font-bold leading-6 text-center -ml-5">Support Harmony Haven</h3>
</div>

<div class="px-4">
    <div class="mt-4">
        <p class="text-black-1 font-[500]">Select Gift Amount *</p>
        <div class="mt-3 flex justify-between">
            <span class="bg-gray-4 px-5 py-3 rounded-lg text-gray-5 cursor-pointer amount hover:bg-blue-1 hover:text-white" data-value="30">$30</span>
            <span class="bg-gray-4 px-5 py-3 rounded-lg text-gray-5 cursor-pointer amount hover:bg-blue-1 hover:text-white" data-value="60">$60</span>
            <span class="bg-gray-4 px-5 py-3 rounded-lg text-gray-5 cursor-pointer amount hover:bg-blue-1 hover:text-white" data-value="120">$120</span>
            <span class="bg-gray-4 px-5 py-3 rounded-lg text-gray-5 cursor-pointer amount hover:bg-blue-1 hover:text-white" data-value="200">$200</span>
        </div>
    </div>

    <!-- TODO:persist data for donation -->
    <div class="mt-3">
        <input type="number" class="border border-gray-1 rounded-lg py-3 px-5 w-36" placeholder="$ Other" id="otherAmount">
        <form action="./confirmation.php" method="post">
            <!-- Hidden input field to store the selected amount -->
            <input type="hidden" id="selectedAmount" name="selectedAmount" value="0">
            <input type="hidden" id="donation_action" name="donation_action" value="0">
            <button type="submit" class="fixed bottom-5 bg-blue-1 w-11/12 text-white py-4 mx-auto left-0 right-0">Complete Donation and Exit</button>
        </form>
    </div>

</div>

<script>
    let inputField = document.getElementById('selectedAmount');
    let otherAmountField = document.getElementById('otherAmount');
    let amountButtons = document.querySelectorAll('.amount');

    function goBack() {
        history.back();
    }

    // Event listeners for each amount button
    amountButtons.forEach(button => {
        button.addEventListener('click', function() {
            updateInputField(button.dataset.value);
        });
    });

    // Event listener for the "Other" input field
    otherAmountField.addEventListener('input', function() {
        updateInputField(otherAmountField.value);
    });

    // Function to update the hidden input field value
    function updateInputField(value) {
        inputField.value = value;
    }
</script>

</body>
</html>
