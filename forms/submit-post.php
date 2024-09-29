<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobimana_mobimanager_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $author = $_POST['authorName'];
    $title = $_POST['postTitle'];
    $postcatagory = $_POST['postCategory'];
    $posttag=$_POST['postTag'];

    
    $content = $_POST['postDescription'];
    $date = date('Y-m-d H:i:s');

    // Handle file CoverPage Image upload
    $image_path_cover = null;
    if (isset($_FILES['coverimage']) && $_FILES['coverimage']['error'] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["coverimage"]["name"]);
        if (move_uploaded_file($_FILES["coverimage"]["tmp_name"], $target_file)) {
            $image_path_cover = $target_file;
        } else {
            header("Location: ../Create_Blog_Post.php?error=Error%20uploading%20image.");
            exit();
        }
    }

    // Handle file Thumbnail Image upload
    $image_path_thumbnail = null;
    if (isset($_FILES['thumbnailimage']) && $_FILES['thumbnailimage']['error'] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["thumbnailimage"]["name"]);
        if (move_uploaded_file($_FILES["thumbnailimage"]["tmp_name"], $target_file)) {
            $image_path_thumbnail = $target_file;
        } else {
            header("Location: ../Create_Blog_Post.php?error=Error%20uploading%20image.");
            exit();
        }
    }

    // Prepare SQL statement
    $sql = "INSERT INTO posts (author, title, postcatagory, posttag, coverimage, thumbnailimage, content, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $author, $title, $postcatagory, $posttag, $image_path_cover, $image_path_thumbnail, $content, $date);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to ManageCreatedPost.php
        header("Location: ../ManageCreatedPost.php");
        exit();
    } else {
        // Redirect to Create_Blog_Post.php with error message
        header("Location: ../Create_Blog_Post.php?error=Post%20is%20not%20submitted%20try%20again%20and%20fix%20the%20image%20as%20small%20size");
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
