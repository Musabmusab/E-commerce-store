<?php
if (isset($_POST['button'])){
    include 'config.php';

    $product_name = $_POST['name'];     
    $product_price = $_POST['price'];    
    $product_category = $_POST['category'];    
    $product_image = $_FILES['image'];    



   $image_loc = $_FILES['image']['tmp_name'];    
     $image_name = $_FILES['image']['name'];    

      $img_des ="images/".$image_name;

    move_uploaded_file($image_loc,"images/" .$image_name);
      //insert product
       mysqli_query($con, "INSERT INTO `admin_penal`( `name`, `price`, `image`, `category`) 
       VALUES ('$product_name','$product_price','$img_des','$product_category')");
      header('location:product page.php');
};
?>