

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* Style for the container that holds the output */
#output-container {
    margin: 20px auto;
    width: 60%;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.record {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    background-color:aliceblue ;
}

.record label {
    font-weight: bold;
}

.record p {
    margin: 5px 0;
}

.record:not(:last-child) {
    border-bottom: 1px solid #ddd;
}

    </style>
</head>
<body>
    <div id="output-container">
        <?php
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $database = "Student"; 

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Semester_Reg";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="record">';
                echo '<label>ID:</label><p>' . $row["ID"] . '</p>';
                echo '<label>Name:</label><p>' . $row["Name"] . '</p>';
                echo '<label>Session:</label><p>' . $row["Session"] . '</p>';
                echo '<label>Phone_No:</label><p>' . $row["Phone_No"] . '</p>';
                echo '<label>City:</label><p>' . $row["City"] . '</p>';
                echo '<label>Gender:</label><p>' . $row["Gender"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "No records found";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
