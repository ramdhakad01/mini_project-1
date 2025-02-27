<?php
include("confige.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];// Hash password for security
    
    $sql = "INSERT INTO registration_user (name, email, phone, address, password) VALUES ()";
    
    if(mysqli_query($conn,$sql))
    {
        echo" Regrestration successfully";
    }
    else
    {
        echo "erro";
    }
}

$conn->close();
?>
