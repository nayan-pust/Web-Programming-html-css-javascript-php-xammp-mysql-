<!DOCTYPE html>
<html>
<head>
    <title>Delete Record Result</title>
</head>
<body>
    <h2>Delete Record Result</h2>
<?php
$servername = "localhost"; 
$username="root";
$password = ""; 
$database = "Student";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id_to_delete = 10; 

$sql = "DELETE FROM Semester_Reg WHERE ID = $id_to_delete";

if ($conn->query($sql) === TRUE) {
    echo "Record with ID $id_to_delete deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
<p><a href="9d.php">View Records</a></p>
</body>
</html>