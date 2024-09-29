<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

//$message = ""; // Initialize an empty message

if ($_SERVER["REQUEST_METHOD"] == "GET") {

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





     // Fetch data from the "support" table
    $sql = "SELECT * FROM become_our_partner";
    $result = $conn->query($sql);


    if (!$result) {
        die("Error fetching data: " . $conn->error);
    }

    // Fetch data into an associative array
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    



    
    // Close the connection
    $conn->close();

    

    // Return data as JSON
    echo json_encode(array("data" => $data));
}
?>
