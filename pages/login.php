<?php
session_start();
include 'db/db.php';

if (!isset($_POST['email'], $_POST['password'])) {
    header('Location: action.php?page=home');
    exit;
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass  = $_POST['password'];

$sql = "SELECT * FROM clients WHERE email = '$email' LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($pass, $row['password'])) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['email'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['phone'] = $row['phone'];
        header('Location: action.php?page=dashboard');
        exit;
    } else {
        header('Location: action.php?page=home&error=wrongPass');
        exit;
    }
} else {
    header('Location: action.php?page=home&error=noUser');
    exit;
}
