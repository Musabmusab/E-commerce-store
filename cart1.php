<?php   
session_start();

if(isset($_SESSION['user'])){


$name= $_POST['name'];
$price= $_POST['price'];
$qu= $_POST['qu'];
if(isset($_POST['add'])){


    $_SESSION['cart'][]= array('name' =>  $name
                            ,'price' => $price,
                            'qu' => $qu );
                    header('location:cart.php');     
};
              // remove product
              if (isset($_POST['delete'])) {
                foreach($_SESSION['cart'] as $key => $value){
                  if ($value['name'] === $_POST['item']) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    header('location:cart.php');
                  };};};
                     // update product
                     if (isset($_POST['update'])) {
                        foreach($_SESSION['cart'] as $key => $value){
                          if ($value['name'] === $_POST['item']) {
                            $_SESSION['cart'] [$key]=  array('name'=> $name,
                            'price'=> $price,
                            'qu' => $qu);
                            header('location:cart.php');
                          }; };};
                       
                        }else{
                          header("location:login.php");};
?>
