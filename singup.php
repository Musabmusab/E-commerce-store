<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link rel="website icon" type="pug" href="log.jpg">
</head>
<body class="bg-gray-900 text-white">
    <div class="flex justify-center items-center h-screen">
        <div class="bg-red-600 px-6 py-8 rounded-lg shadow-lg max-w-md w-full">
            <h2 class="text-3xl font-semibold mb-6 text-center">Sign Up</h2>
            <form action="singup1.php" method="post">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium mb-1">Name</label>
                    <input type="text" name="name" class="w-full px-3 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:border-red-500 text-white" >
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email" class="w-full px-3 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:border-red-500 text-white" >
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium mb-1">Phone Number</label>
                    <input type="tel"  name="phone" class="w-full px-3 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:border-red-500 text-white" >
                </div>
                <div class="mb-4 relative">
                    <label for="password" class="block text-sm font-medium mb-1">Password</label>
                    <input type="password"  name="password" class="w-full px-3 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:border-red-500 text-white pr-10" >
                </div>
                <div>
                    <button name="submit" class="w-full px-3 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:border-red-500 text-white">submit</button>

                </div>
   
            </form>
            <div>
                    <button name="active" class="w-full px-3 my-4  py-2 rounded-lg bg-yellow-900 border border-gray-700 focus:outline-none focus:border-red-500 text-white"><a href="login.php" class="no-underline">Already Account</a></button>
                    
                </div>
        </div>
    </div>
</body>
</html>