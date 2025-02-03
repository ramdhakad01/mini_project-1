
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!--ring div starts here-->
    <form action="#" method="post" autocomplete="off">
<div class="ring">
    <i style="--clr:#b3ff00;"></i>
    <i style="--clr:#c9235b;"></i>
    <i style="--clr:#0eb7d5;"></i>
    <div class="login">
      
      <h2>Login</h2>
      <div class="inputBx">
        <input type="email" placeholder="email" required name="email">
      </div>
      <div class="inputBx">
        <input type="password" placeholder="Password" required name="password">
      </div>
      <div class="inputBx">
        <input type="submit" value="Sign in" name="btn">
      </div>
      <div class="links">
        <a href="#">Forget Password</a>
        <a href="#">Signup</a>
      
      </div>
    </div>
  </div>
</from>
  <!--ring div ends here-->
</body>
</html>

<?php
session_start();
  ?>

<?php
include ("confige.php");
 if (isset($_POST['btn']))
 {
    $username= $_POST['email'];
    $pwd= $_POST['password'];
    $userprofile=$_session['user_name'];
    if($userprofile== true)
    {

    }
    else
    {
      header('location:login.php');
    }
    $query= " SELECT * FROM loginuser WHERE email = '$username' &&  password ='$pwd'";
      $data = mysqli_query($conn,$query);
       $total = mysqli_num_rows($data);
      //  echo $total;
      if($total==1)
      {   $_SESSION['user_name'] = $username; 
         header('location:aqua.php');
      }
      else
       {
        echo " Login failed";
       }
 }









?>