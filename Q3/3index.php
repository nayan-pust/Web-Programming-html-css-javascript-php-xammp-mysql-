<?php
include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        * {
            color: white;
        }
        

        body {
    background-color: #3498db;
    color: white;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    width: 400px;
    background-color: #2c3e50;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    margin-bottom: 20px;
    font-size: 24px;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    background-color: #ecf0f1;
    color: #2c3e50;
}

.gender {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

.gender label {
    margin-right: 10px;
}

.submit {
    background-color: #27ae60;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 100px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: large;
}

.submit:hover {
    background-color: #219d54;
}

.error-message {
    color: #e74c3c;
    margin-top: 5px;
}

.result {
    
    margin-top: 20px;
    background-color: #34495e;
    padding: 20px;
    border-radius: 5px;
    color-scheme: red;
}

        .form-control>.submit:hover {
            cursor: pointer;
            background-color:red;
        }
        #cl  /* Id call use #  */
        {
            color: red;
        }
    </style>
</head>
<body>
    <form action="3index.php" method="POST">
        <h1>Personal Details</h1>
        <div class="form-control">
            <label for="name">Name:</label>
            <input type="text" id="cl" name="name">
        </div>
        <div class="form-control">
            <label for="email">E-mail:</label>
            <input type="email" id="cl" name="email">
        </div>
        <div class="form-control">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="cl" name="phone">
        </div>
        <div class="form-control">
            <label for="password">Password:</label>
            <input type="password" id="cl" name="password">
        </div>
        <div class="gender">
            <label for="gender">Gender:</label>
            <span style="margin-left: 20px;">
                <input type="radio" value="Male" name="gender" checked> Male
                <input type="radio" value="Female" name="gender"> Female
            </span>
        </div>
        <br><br>
        <div class="form-control">
            <input type="submit" class="submit" name="submit" value="Submit">
        </div>
    </form>
</body>
</html>