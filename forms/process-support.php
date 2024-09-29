<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$message = ""; // Initialize an empty message

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Your database connection details
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
    $ticketNumber = $_POST['ticketNumber']; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $orgName = $_POST['orgName'];
    $mobile = $_POST['mobile'];
    $issueTitle = $_POST['issueTitle'];
    $issueDescription = $_POST['issue-description'];
    $status = $_POST['status'];
    


    

    // Handle file upload
    /*$uploadDirectory = "/opt/lampp/htdocs/mdm"; // Specify the directory where you want to store uploads

    //create directory
    if (!file_exists($uploadDirectory)) {
    mkdir($uploadDirectory, 0777, true); // The third parameter creates nested directories
    
    }

    $uploadedFile = $uploadDirectory . basename($_FILES["attachmentInput"]["name"]);

    if (move_uploaded_file($_FILES["attachmentInput"]["tmp_name"], $uploadedFile)) {
        $message = "File uploaded successfully.";
    } else {
        $message = "Error uploading file.";
    }*/

    // Insert data into the database
    
    /*$sql = "INSERT INTO support (ticketNumber,name, email, orgName, mobile, issueTitle, issueDescription,attachment)
    VALUES ('$ticketNumber','$name', '$email', '$orgName', '$mobile', '$issueTitle', '$issueDescription', '$uploadedFile')";*/



    $sql = "INSERT INTO support (ticketNumber,name, email, orgName, mobile, issueTitle, issueDescription, status)
    VALUES ('$ticketNumber','$name', '$email', '$orgName', '$mobile', '$issueTitle', '$issueDescription', '$status')";

    // Check if the form data was successfully inserted into the database
    if ($conn->query($sql) === TRUE) {
        $message .= "Support Request Submitted Successfully!";
    } else {
        $message .= " Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();

    // Return the message as a response
    echo $message;
}
?>
