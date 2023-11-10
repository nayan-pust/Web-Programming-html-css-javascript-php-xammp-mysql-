<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Student"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert sample data
$sql = "INSERT INTO Semester_Reg (ID,Name, Session, Phone_No, City, Gender) VALUES ('145','Rohim', '2019-2020', '26536353653', 'Rajapur', 'Male')";
if ($conn->query($sql) === TRUE) {
    echo "Sample data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
