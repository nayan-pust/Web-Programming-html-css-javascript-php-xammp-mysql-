<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
// Create the "Student" database
$sql = "CREATE DATABASE IF NOT EXISTS Student";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Use the "Student" database
$conn->select_db("Student");

// Create the "Semester_Reg" table
$sql = "CREATE TABLE IF NOT EXISTS Semester_Reg (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Session VARCHAR(9) NOT NULL,
    Phone_No VARCHAR(15),
    City VARCHAR(255),
    Gender ENUM('Male', 'Female') NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$conn->close();
?>
