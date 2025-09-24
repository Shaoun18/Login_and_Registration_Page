<?php
session_start();
//header('location:index.php');
include 'db.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['Phone'];
$username  = $_POST['username'];
$pass  = $_POST['password'];

$s = "select * from usertable where fname='$fname'&& lname='$lname'&& Phone='$phone'&& username ='$username'&&password='$pass'";

$result = mysqli_query($conn, $s);
$num    = mysqli_num_rows($result);

if ($num == 1) {
    echo "<center><h1>Username Already Taken</h1>";
} else {
    $reg = "insert into usertable(fname,lname,phone,username,password) values('$fname','$lname','$phone','$username','$pass')";
    mysqli_query($conn, $reg);
    // echo "<center><h1>Registration Suc</h1>";
    header('location:index.php?success=Registration');
    exit;
}
