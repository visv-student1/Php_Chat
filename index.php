<?php
     session_start();
     if(isset($_SESSION['unique_id'])){
        header("location: users.php");
     }
?>

<?php include_once "./header.php"; ?>
<?php include_once "./index.html"; ?>

