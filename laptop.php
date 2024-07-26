
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laptop</title>
    <link rel="website icon" type="pug" href="log.jpg">
</head>
<?php
 include's2.php';
?>
<body>

<div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8'>

<?php
include'config.php';
$record= mysqli_query($con,"SELECT * FROM `admin_penal`");
while ($row=mysqli_fetch_array($record)) {
    $check_page = $row['category'];
    if ($check_page === 'laptop') {
        echo"
        <div class='bg-gray-800 rounded-lg p-4 transition duration-300 transform hover:scale-105'>
       <form action ='cart1.php' method ='POST'>
                       <img src='$row[image]' alt='Product 1' class='h-40 w-full object-cover rounded'>
                       <div class='mt-4'>
                             <h2 class='text-lg font-semibold' name='name'>$row[name]</h2>
                             <p class='text-gray-400 ' name='price'>RS: $row[price]</p>
                                    <input  type='hidden' name='name' value='$row[name]'>
                                    <input type='hidden' name='price' value='$row[price]'>
                             <input name='qu' class='mt-2 p-1 bg-red-600 ' type='number' value='min='1'max='20'' placeholder='Quantity' >
                             <button name='add' class='mt-2 bg-blue-500 text-white px-4 py-2 rounded-md'>Add to Cart</button>
                       </div>     
                       </form>
                   </div>
       ";};};  
?>    

 </div>         
</body>
</html>
