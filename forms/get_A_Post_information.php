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

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare('SELECT * FROM posts WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $post = $result->fetch_assoc();

	

    echo json_encode(['data' => $post]);
} else {
    echo json_encode(['error' => 'No ID provided']);
}

?>
