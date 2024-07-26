<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="website icon" type="pug" href="log.jpg">
    <style>
    table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #dee2e6;
            text-align: left;
        }
        th {
            background-color: black;
            font-weight: bold;
        }
        img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .update, .delete {
            color: #007bff;
            cursor: pointer;
        }
        .delete {
            color: #dc3545;
        }
    </style>
</head>
<?php include"s2.php"   ?>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">

<div class="container mx-auto p-4">
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Add Product</h2>
        <form  class="space-y-4" action="logic_product.php" method="POST" enctype="multipart/form-data">
            <div>
                <label  class="block text-sm font-medium text-gray-300">Product Name</label>
                <input type="text"  name="name" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md shadow-sm text-white" >
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-300">Product Price</label>
                <input type="text"  name="price" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md shadow-sm text-white" >
            </div>
            <div>
                <label  class="block text-sm font-medium text-gray-300">Product Image</label>
                <input type="file" name="image" class="mt-1 block w-full text-red" >
            </div>

            <div>
                 <label  class="block text-sm font-medium text-gray-300">category</label>
                 <select name="category" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md shadow-sm text-white"  >
                     <option value="bag">bag</option>
                     <option value="laptop">laptop</option>
                     <option value="home">home</option>
                     <option value="other">other</option>
                 </select>
            </div>


            <div class="flex justify-end">
                <button  name="button" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md">Add Product</button>
            </div>
        </form>
    </div>

                      

    <div class="bg-gray-800 p-6 mt-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Product List</h2>
        <table class="min-w-full bg-gray-700 text-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-600">Number</th>
                    <th class="py-2 px-4 border-b border-gray-600">Name</th>
                    <th class="py-2 px-4 border-b border-gray-600">Price</th>
                    <th class="py-2 px-4 border-b border-gray-600">Image</th>
                    <th class="py-2 px-4 border-b border-gray-600">category</th>
                    <th class="py-2 px-4 border-b border-gray-600">delete</th>
                </tr>
            </thead>
            <tbody>
    <?php
              include'config.php';
              $record = mysqli_query($con,"SELECT * FROM `admin_penal` ");
              while ($row = mysqli_fetch_array($record)) 
              echo"
            <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><img src ='$row[image]' alt'simple mistake'></td>
                        <td>$row[category]</td>
                        <td ><a href='delete.php? id=$row[id]'>delete</a></td>
            </tr>
              ";

    ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
