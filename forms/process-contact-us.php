<?php
$message = ""; // Initialize an empty message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your PHP code for handling form submissions goes here

    // Database connection details
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobimana_mobimanager_db";

    // $servername = "mobi-manager.com";
    // $username = "mobimana_mobimanager_user";
    // $password = "iWb~B^cszbn[";
    // $dbname = "mobimana_mobimanager_db";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect form data
    $name = $_POST['ownerName'];
    $email = $_POST['email'];
    $orgName = $_POST['orgName'];
    $mobile = $_POST['mobile'];
    $issueTitle = $_POST['issueTitle'];
    $issueDescription = $_POST['issue-description'];

    // Insert data into the database
    $sql = "INSERT INTO contact_us (name, email, orgName, mobile, issueTitle, issueDescription)
            VALUES ('$name', '$email', '$orgName', '$mobile', '$issueTitle', '$issueDescription')";

    // Check if the form data was successfully inserted into the database
    if ($conn->query($sql) === TRUE) {
        $message = "Submitted successfully!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();

    // Return the message as a response
    echo $message;
}
?>
