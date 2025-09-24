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
</head>

<body>
    <?php include 'includes/header.php' ?>
    <div class="container">
        <div class="login-box">
            <header id="head">
                <h2>
                    Welcome to Login Database Management System<br />
                </h2>
            </header>
            <div class="row" style="margin: auto;">
                <div class="login-left">

                    <a href="action.php?page=logout"><button class="btn btn-danger" style="margin-left: 800px;">Logout</button></a>
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
            </div>

            <?php include 'includes/footer.php' ?>
        </div>
    </div>
</body>

</html>