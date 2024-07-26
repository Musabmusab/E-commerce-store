<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-commerce Website</title>
    <style>
 .logo {
    font-size: 1.8rem;
    color: #ff4d4d;
    float: left;
    };
    .category-link {
        transition: transform 0.2s ease-in-out;
    }
    .category-link:hover {
        transform: scale(1.1);
    }; 
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">

    <!-- Header -->
     <?php session_start() ?>
    <header class="bg-gray-800 p-2 mb-5 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <div class="logo">MUSAB E-Commerce </div>
            <a href="new.php" class="text-white">Dashboard</a>
            <a href="ecommerc store.php" class="text-red-500">With Sing In Add Product</a>
            <a href="product page.php" class="text-yellow-500">Without Sing In Add Product</a>
            <a href="user.php" class="text-white">Users</a> 
            <a href="cart.php"  class="text-white">Add Cart </a>
        </div>
    </header>
    <div id='nn' class="bg-gray-900 text-white flex justify-center mb-12">
    <div class="max-w-md bg-red-600 rounded-lg p-8 shadow-lg">
        <h1 class="text-4xl font-bold text-center mb-6">Select Product Category</h1>
        <div class="flex flex-col items-center space-y-4 ">
            <a href="index.php" class="category-link">Home</a>
            <a href="laptop.php" class="category-link">Laptop</a>
            <a href="bag.php" class="category-link">Bag</a>
            <a href="other.php" class="category-link">Other</a>
        </div>
    </div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
</body>
</html>

