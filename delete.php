<?php
   $id = $_GET['id'];
   include'config.php';
   mysqli_query($con,"DELETE FROM `admin_penal` WHERE  id = $id");
    header("location:product page.php")
?>