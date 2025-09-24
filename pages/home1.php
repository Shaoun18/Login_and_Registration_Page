<?php
session_start();
if (! isset($_SESSION['username'])) {
    header('location:index.php');
}
?>
<html>

<head>
    <tittle>
        <h3> Home Page </h3>
    </tittle>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class='container'>
        <a class="float-right" href="logout.php">Logout</a>
        <h1> Welcome to our Page
            <?php
            echo $_SESSION['name'];
            ?>
        </h1>
    </div>
</body>

</html>