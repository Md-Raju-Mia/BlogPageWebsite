<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

// Your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobimana_mobimanager_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['postcatagory'])) {
    $PostCatagory = $_GET['postcatagory'];
    $stmt = $conn->prepare('SELECT * FROM posts WHERE postcatagory = ? ORDER BY id DESC');
    $stmt->bind_param('s', $PostCatagory);
    $stmt->execute();
    $result = $stmt->get_result();
    $posts = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode(['data' => $posts]);
} else {
    echo json_encode(['error' => 'No post category provided']);
}

?>
