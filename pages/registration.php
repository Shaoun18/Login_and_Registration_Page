<?php
session_start();
include 'db/db.php';

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$username = mysqli_real_escape_string($conn, $_POST['email']);
$pass = $_POST['password'];
$hashed = password_hash($pass, PASSWORD_DEFAULT);


// Duplicate email check
$check_email = "SELECT * FROM clients WHERE email = '$username'";
$result = mysqli_query($conn, $check_email);
$num = mysqli_num_rows($result);

if ($num > 0) {
    // echo "<center><h1>Email Already Registered</h1>";
    header('location:action.php?page=registration&error=email_taken');
    exit;
} else {
    // Data Insert for the new registration
    $reg = "INSERT INTO clients(fname, lname, phone, email, password) 
            VALUES('$fname','$lname','$phone','$username','$hashed')";

    if (mysqli_query($conn, $reg)) {
        header('location:action.php?page=home&success=Registration');
        exit;
    } else {
        echo "<center><h1>Registration Failed: " . mysqli_error($conn) . "</h1>";
    }
}
