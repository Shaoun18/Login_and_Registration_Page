<?php
session_start();
include 'db/db.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass  = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM clients WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // if you are storing plain password (bad practice but for now)
        if ($row['password'] === $pass) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['email'];
            header("Location: action.php?page=dashboard");
            exit();
        } else {
            header("Location: action.php?page=home&error=wrongPass");
            exit();
        }
    } else {
        header("Location: action.php?page=home&error=noUser");
        exit();
    }
} else {
    header("Location: action.php?page=home");
    exit();
}
