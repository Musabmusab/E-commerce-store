<?php
  include 'config.php';
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $email =$_POST['email'];
 $phone = $_POST['phone'];
 $password =$_POST['password'];

        $dup_email = mysqli_query($con,"SELECT * FROM `singup` WHERE email = '$email' ");
        $dup_name = mysqli_query($con,"SELECT * FROM `singup` WHERE name = '$name' ");

        if (mysqli_num_rows($dup_email)) {
          echo"
          <script>
          alert('This email  already taken');
          window.location.href='singup.php';
          </script>";
        };
        
        if (mysqli_num_rows($dup_name)) {
          echo"
          <script>
          alert('This name already taken');
          window.location.href='singup.php';
          </script>";
        }else{
          mysqli_query($con,"INSERT INTO `singup`( `name`, `email`, `phone`, `password`)
           VALUES ('$name ','$email','$phone','$password')");
             echo"
             <script>
             alert('Register successfully');
             window.location.href='index.php';
             </script>";
        };

        
};


?>