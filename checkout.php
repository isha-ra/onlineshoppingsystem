<?php


require_once 'dbconnection.php';
?>
<?php

session_start();
if (isset($_SESSION["uid"])) {
    header("location:index.php");
}
?>

<?php include 'includes.php'; ?>
<?php include 'header_top.php'; ?>
<?php include 'header_middle.php'; ?>
<?php include 'header_bottom.php'; ?>



  
        <hr/>
<?php include 'footer.php'; ?>