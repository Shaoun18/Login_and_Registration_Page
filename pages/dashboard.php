<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:action.php?page=home');
    exit();
}

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";

?>

<title>Dashboard</title>

<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="login-box">
        <header id="head">
            <h2>
                Welcome to Login Database Management System<br />
            </h2>
        </header>
        <div class="row" style="margin: auto;">
            <div class="login-left">

                <a href="action.php?page=logout">
                    <button class="btn btn-danger" style="margin-left: 800px;">Logout</button>
                </a>

                <h1>Welcome,
                    <?php
                    if (isset($_SESSION['fname'])) {
                        echo $_SESSION['fname'];
                    } else {
                        echo $_SESSION['username'];
                    }
                    ?>
                </h1>

                <h3>Your Profile Info:</h3>
                <ul>
                    <li><b>First Name:</b> <?php echo $_SESSION['fname']; ?></li>
                    <li><b>Last Name:</b> <?php echo $_SESSION['lname']; ?></li>
                    <li><b>Email:</b> <?php echo $_SESSION['username']; ?></li>
                    <li><b>Phone:</b> <?php echo $_SESSION['phone']; ?></li>
                </ul>

            </div>
        </div>

        <?php include 'includes/footer.php'; ?>