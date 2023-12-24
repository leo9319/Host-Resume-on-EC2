<?php
session_start();

// Use your own database credentials here
$servername = "localhost";
$username = "root";
$password = "!Vision1957HUB";
$dbname = "experiment_one_donations";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the amount is set in the POST request
if (isset($_POST['selectedAmount'])) {

    // Get values
    $rival_id = $_SESSION["rival_id"];
    $experiment_name = $_SESSION["experiment_name"];

    $check_integer = filter_var($_POST['selectedAmount'], FILTER_VALIDATE_INT);

    if ($check_integer !== false) {
        $donation_amount = $_POST['selectedAmount'];
        $donation_action = $_POST['donation_action'];

        // Use prepared statement to prevent SQL injection
        $sql = "INSERT INTO donations (rival_id, experiment_name, donation_amount, donation_action) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bind_param("ssii", $rival_id, $experiment_name, $donation_amount, $donation_action);

        // Execute the statement
        if ($stmt->execute()) {
//            echo "Data inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // User entered non-integer
        $donation_amount = 0;
        $donation_action = 2;
    }
}

// Close the connection
$conn->close();
?>

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
<div class="container mx-auto flex flex-col justify-center h-screen px-8">
    <h1 class="font-bold text-3xl">Great Work — <br>Almost Done!</h1>
    <div class="mt-5 bg-gray-4 px-4 py-4 rounded-lg">
        <h3 class="font-bold pb-4">Next steps:</h3>
        <p>Answer remaining questions following the link below:</p>
        <p class="mt-6">Thank you for your valuable participation!</p>

        <div class="mt-5">
            <span class="mr-2">👉</span><a href="<?php echo 'https://ca.rival.chat/c/4c8bd6am7bue?rival_id=' . $_SESSION["rival_id"]; ?>" class="underline text-blue-500">Click here</a> to go back to the survey
        </div>
        

    </div>
</div>


</body>
</html>
