<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "Programmer";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = "sample_id";
$name = "Jo_Doe";
$image = "imge.jpg";
$password = password_hash("sample_password", PASSWORD_DEFAULT); 

$sql = "INSERT INTO Stu_Reg (ID, Name, Image, Password) VALUES ('$id', '$name', '$image', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Sample data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
