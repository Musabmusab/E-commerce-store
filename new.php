<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="website icon" type="pug" href="log.jpg">

   <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #1a1a1a;
    color: #fff;
    line-height: 1.6;
    overflow-x: hidden; /* Prevent horizontal scroll */
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Navbar styles */
.navbar {
    background-color: #2c2c2c;
    padding: 10px 0;
    height: 66px;
}

.navbar .logo {
    font-size: 1.8rem;
    color: #ff0000;
    float: left;
    text-align: center;
}

.navbar .nav-links {
    float: right;
    list-style: none;
}

.navbar .nav-links li {
    display: inline-block;
    margin-right: 20px;
}

.navbar .nav-links .nav-link {
    color: #fff;
    text-decoration: none;
    padding: 10px;
    transition: all 0.3s ease;
}

.navbar .nav-links .nav-link:hover {
    color: #ff4d4d;
}

/* Main content styles */
.main-content {
    padding: 100px 0;
    text-align: center;
}

.main-content h1 {
    font-size: 3rem;
    margin-bottom: 30px;
}

.options {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.option {
    padding: 15px 30px;
    background-color: #195a06;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.option:hover {
    background-color: #00d4c3;
}

/* Footer styles */
.footer {
    background-color: #2c2c2c;
    padding: 10px 0;
    text-align: center;
    position: absolute;
    bottom: 0;
    width: 100%;
}
   </style>



</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="logo"> M.A E-Commerce store</div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h1>Welcome to Our E-commerce Store</h1>
            <div class="options">
                <a href="index.php" class="option">Visit Store</a>
                <a href="user.php" class="option">Users Details</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            &copy; 2024 E-commerce Store. All rights reserved.Creat by MR.MUSAB.
        </div>
    </footer>
</body>
</html>
