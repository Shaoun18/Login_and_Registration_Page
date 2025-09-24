<?php
session_start();
include 'db/db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$username = $_POST['email'];
$pass = $_POST['password'];

// Duplicate email check
$check_email = "SELECT * FROM clients WHERE email = '$username'";
$result = mysqli_query($conn, $check_email);
$num = mysqli_num_rows($result);

if ($num > 0) {
    // echo "<center><h1>Email Already Registered</h1>";
    header('location:action.php?page=registration&success=email_taken');
    exit;
} else {
    // Email doesn't exist, proceed with registration
    $reg = "INSERT INTO clients(fname, lname, phone, email, password) 
            VALUES('$fname','$lname','$phone','$username','$pass')";

    if (mysqli_query($conn, $reg)) {
        header('location:action.php?page=home&success=Registration');
        exit;
    } else {
        echo "<center><h1>Registration Failed: " . mysqli_error($conn) . "</h1>";
    }
}
