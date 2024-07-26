<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="website icon" type="pug" href="log.jpg">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 12px;
        }
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
            background: black;
            color: white;
        }
        th {
            background-color: #f1f1f1;
            font-weight: bold;
            background: #dc3545;
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
<?php include"s2.php"?>
<body>
<div class="main">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $record = mysqli_query($con,"SELECT * FROM `singup` ");
              while ($row=mysqli_fetch_array($record))
              echo"
      
            <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>   
            </tr> ";?>
        </tbody>
    </table>

    </div>
</body>
</html>