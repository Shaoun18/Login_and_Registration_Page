<?php
session_start();
//header('location:index.php');
$conn = mysqli_connect('localhost', 'shaoun20', '123456');
mysqli_select_db($conn, 'login_page');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['Phone'];
$name  = $_POST['user'];
$pass  = $_POST['password'];

$s = "select * from usertable where fname='$fname'&&lname='$lname'&& Phone='$phone'&&name='$name'&&password='$pass'";

$result = mysqli_query($conn, $s);
$num    = mysqli_num_rows($result);

if ($num == 1) {
    echo "<center><h1>Username Already Taken</h1>";
} else {
    $reg = "insert into usertable(fname,lname,Phone,name,password) values('$fname','$lname','$phone','$name','$pass')";
    mysqli_query($conn, $reg);
    echo "<center><h1>Registation Succesful</h1>";
}
