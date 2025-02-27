<?php
include("confige.php");
if (isset($_POST['submit']))
 {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];// Hash password for security
    
    $sql = "INSERT INTO registration_user (`name`,`email`,`phone`,`address`,`password`)
     VALUES ('$name','$email','$phone','$address','$password')";
    
    if(mysqli_query($conn,$sql))
    {
         echo "<script>
                    alert('Registration Successful!');
                    window.location.href = 'index.html'; // Redirect to login page
                  </script>";
        
    }
    else
    {
        echo "erro".mysqli_error($conn);
    }
}

$conn->close();
?>
