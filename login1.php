<?php
 include 'config.php';

 $name = $_POST['name'];
 $password =$_POST['password'];

 $result = mysqli_query($con,"SELECT * FROM `singup` WHERE (name = '$name' OR email = '$name') AND password = '$password' ");

session_start();
if (mysqli_num_rows($result)){
    $_SESSION['user'] = $name;

     echo"
     <script>
          alert('Successfully Login ');
          window.location.href='product page.php';
     </script>
     ";
}
else {
     echo"
     <script>
          alert('incorrect email or name or password');
        window.location.href='login.php';
     </script>
     ";
;
}

?>
  