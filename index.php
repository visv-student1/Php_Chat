<?php
     session_start();
     if(isset($_SESSION['unique_id'])){
        header("location: users.php");
        header("location: index.html");
     }
?>

<?php include_once "./header.php"; ?>


