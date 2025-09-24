<?php

// Create the database connection 
$conn = mysqli_connect('localhost', 'root', '');

// Database name is the login_page
mysqli_select_db($conn, 'login_page');