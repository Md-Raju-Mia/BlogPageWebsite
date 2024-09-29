<?php
   // Your database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mobimana_mobimanager_db";

    // $servername = "mobi-manager.com";
    // $username = "mobimana_mobimanager_user";
    // $password = "iWb~B^cszbn[";
    // $dbname = "mobimana_mobimanager_db";

   //Create Connection
   $connection = new mysqli($servername, $username, $password, $dbname);

   //Check connection stablished or not!
   if ($connection->connect_error) {
       die("Connection failed: " . $connection->connect_error);
   }

   if (isset($_GET["id"])) {
    #if not exist then
        $id = $_GET['id'];
        
        $sql = "DELETE FROM posts WHERE id=$id"; 
        $result = $connection->query($sql);

        // if (!$result) {
        //     die("Invalid query : " . $connection->error);
        //     break;
        // }

}     
   header("location: ./ManageCreatedPost.php");
   exit;


?>