<?php
$connect = mysqli_connect("localhost", "root", "", "Programmer");

// Insert start
if (isset($_POST["insert"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $img = $_FILES["img"]["name"];
    $password = $_POST["password"];
    $pass = md5($password);
    $insert = "INSERT INTO Stu_Reg(ID,Name,Image,Password) VALUES ('$id','$name','images/$img', '$pass')";
    $result = mysqli_query($connect, $insert);
    move_uploaded_file($_FILES['img']['tmp_name'], "images/" . $_FILES['img']['name']);
    if ($result == 1) {
        echo "Successfully insert your record!";
    } else {
        echo "Unsuccessful";
    }
} // Insert End

// Delete start
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $pass = md5($password);
    $query = "SELECT * FROM Stu_Reg where ID = '$id' and Password='$pass'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $query = "DELETE FROM Stu_Reg where ID = '$id' and Password='$pass'";
    $execute = mysqli_query($connect, $query);
    if ($execute) {
        $image = $row['Image'];
        unlink("$image");
        echo "Successfully deleted your record";
    } else {
        echo "Unsuccessful";
    }
} // Delete end

// Show data from database
if (isset($_POST["select"])) {
    $query = "SELECT * FROM Stu_Reg";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<div class="record-container">';
        while ($row = mysqli_fetch_array($result)) {
            echo '<div class="record">';
            echo '<label>ID:</label><p>' . $row["ID"] . '</p>';
            echo '<label>Name:</label><p>' . $row["Name"] . '</p>';
            echo '<label>Image:</label><p><img src="' . $row['Image'] . '"></p>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "No records found";
    }
}

// End of show database
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            font-size: 16px;
        }

        th, td {
            padding: 10px;
        }

        input[type="text"], input[type="password"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .image-container {
            text-align: center;
        }

        img {
            max-width: 100%;
            max-height: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .message {
            text-align: center;
            font-weight: bold;
            color: #4CAF50;
        }

        .record-container {
            display: flex;
            flex-wrap: wrap;
        }

        .record {
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 10px;
            padding: 10px;
            max-width: 300px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Programmer Registration Form</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <th>ID:</th>
                <td colspan="2"><input type="text" name="id"></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td colspan="2"><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Image:</th>
                <td><input type="file" name="img" id="img_id" onchange="change(event)"></td>
            </tr>
            <tr>
                <th>Password:</th>
                <td colspan="2"><input type="password" name="password"></td>
            </tr>
            <tr>
                <th><button name="insert">Insert</button></th>
                <th><button name="select">Show</button></th>
                <th><button name="delete">Delete</button></th>
            </tr>
        </table>
        <div class="image-container">
            <img id="image_change" src="images/man_icon.jpg" alt="Image Preview">
        </div>
        <div class="message">
            <!-- Display success or error messages here -->
        </div>
    </form>
    <script>
        function change(event) {
            var output = document.getElementById('image_change');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>
</html>
