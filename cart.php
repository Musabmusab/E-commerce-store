<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="website icon" type="pug" href="log.jpg">
</head>

<style>
    .wa{
        background: yellowgreen;
        color: black;
        padding: 8px;
        border-radius: 12px;
        border: solid red 2px;
    }
</style>
<?php include's2.php'?>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5 text-center text-red-600">My Cart</h1>
        <table class="min-w-full bg-gray-800 text-white">
            <thead>
                <tr class="bg-gray-700">
                    <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">Index No.</th>
                    <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm text-center">Product Name</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm text-center">Product Price</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm text-center">Product Quantity</th>
                    <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">Update</th>
                    <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">Delete</th>
                    <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">Thanks</th>
                </tr>
            </thead>
            <tbody class="bg-gray-600">

            <?php
            // session_start();

            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) {                  


                echo"
                <form action ='cart1.php' method='POST'>
                  <tr>
                <td class='text-center py-3 px-4'>$key</td>
                <td class='text-center py-3 px-4 '><input class='wa'type='hidden' name='name' value='$value[name]'>  $value[name]</td>
                <td class='text-center py-3 px-4'><input class='wa' type='hidden' name='price' value='$value[price]'> $value[price]</td>
                <td class='text-center py-3 px-4'><input class='wa' type='text' name='qu' value='$value[qu]'></td>
                <td class='text-center py-3 px-4'> <button name='update' class='bg-red-500 text-white py-1 px-3 rounded'>Update</button></td>
                <td class='text-center py-3 px-4'><button name='delete' class='bg-red-500 text-white py-1 px-3 rounded'>Delete</button</td>
                
                  <input type ='hidden' name='item' value='$value[name]'>
               <td class='text-center py-3 px-4'> For shoping</td>
                  </tr>
               </form>
             ";
            };};?>
            </tbody>
        </table>
   
        <div class="flex justify-end mt-5">
        <button onclick="fu()" class='bg-yellow-500 text-white py-1 px-3 mx-5 rounded'>BUY</button>   
        </div>
   

    </div>
    <script>
        function fu(){
            alert("This is project not a real store")
        };
    </script>
</body>
</html>