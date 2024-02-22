<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        #sidebar {
            width: 250px;
            height: 100%;
            background-color: #333;
            position: fixed;
            overflow: auto;
        }

        #main-content {
            margin-left: 250px;
            padding: 20px;
        }

        #sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
        }

        #sidebar a:hover {
            background-color: #555;
            color: #fff;
        }

        #header {
            background-color: #0ff;
            padding: 20px;
            color: #fff;
        }

        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <div id="header">
            <h2>Admin Panel</h2>
        </div>
        <a href="#">Dashboard</a>
        <a href="product.php">products</a>
        <a href="category.php">Category</a>
        <a href="brand.php">Brand</a>
        <a href="order.php">Orders</a>
        <a href="userlist.php">Users</a>
        <a href="usercontact.php">Contact</a>
        <a href="slider.php">Slider</a>
    </div>
    <!-- <div id="main-content">
        <h2>Dashboard</h2>
    </div> -->
</body>
</html>
