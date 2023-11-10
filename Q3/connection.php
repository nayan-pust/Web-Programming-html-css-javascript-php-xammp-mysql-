<?php
$server="localhost";
$username="root";
$password="";
$db="db3";
$conn=mysqli_connect($server,$username,$password,$db);

if(isset($_POST['submit']))
                {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    
            $insertquery = "INSERT INTO formtable (name, email, password, phone, gender) 
            VALUES ('$name', '$email', '$password', '$phone', '$gender')";
               $res = mysqli_query($conn,$insertquery);

    if ($res) 
    {
        ?>
        <script>
            alert("Data inserted Successfully");
        </script>
        <?php
    } else
    {
        ?>
        <script>
            alert("Data is not inserted Successfully");
        </script>
        <?php
    }
                       
}

?>