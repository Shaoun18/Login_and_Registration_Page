<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'User';   //New DataBase Create

// Try to connect without selecting a database
$temp_conn = new mysqli($hostname, $username, $password);

if ($temp_conn->connect_error) {
    die("Connection failed: " . $temp_conn->connect_error);
}

// Check if database exists
$result = $temp_conn->query("SHOW DATABASES LIKE '$dbname'");

if ($result->num_rows == 0) {
    // Database doesn't exist, create it
    $sql = "CREATE DATABASE $dbname";
    if ($temp_conn->query($sql) === TRUE) {
        echo "Database created successfully<br>";
    } else {
        die("Error creating database: " . $temp_conn->error);
    }
}

$temp_conn->close();

// database connect
$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if table exists
$table_check = $conn->query("SHOW TABLES LIKE 'clients'");

if ($table_check->num_rows == 0) {
    // Table doesn't exist, create it

    $sql = "CREATE TABLE clients (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password TEXT NOT NULL,
    Created_At TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table 'clients' created successfully<br>";
    } else {
        die("Error creating table: " . $conn->error);
    }
}

// echo "Connected successfully";
