<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:action.php?page=home');
    exit();
}
?>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class='container'>
        <a class="float-right" href="action.php?page=logout">Logout</a>
        <h1>Welcome to our Page
            <?php
            // Use the correct session variable
            if (isset($_SESSION['name'])) {
                echo $_SESSION['name'];
            } elseif (isset($_SESSION['username'])) {
                echo $_SESSION['username'];
            }
            ?>
        </h1>
    </div>
</body>

</html>