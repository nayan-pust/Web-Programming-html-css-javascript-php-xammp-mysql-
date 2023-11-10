<html>

<?php
$servername = "localhost"; 
$username = "root"; 
$password="";
$database = "student"; 
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id_to_update = 13; 
$sql = "UPDATE Semester_Reg SET Name = 'Sakib Al Hasan' WHERE ID = $id_to_update";
if ($conn->query($sql) === TRUE) {
    echo "Record with ID $id_to_update updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>

<p><a href="9d.php">View Records</a></p>
</html>




