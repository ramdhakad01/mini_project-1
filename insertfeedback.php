<?php
 include("confige.php");
 $name=$_POST['name'];
 $email=$_POST['email'];
 $sub=$_POST['sub'];
 $messege=$_POST['message'];
 $sql="insert into feedback ( `id`,`name`,`email`,`subject`,`message`)
              values('NULL','".$name."','".$email."','".$sub."','".$messege."')";
              if(!mysqli_query($conn,$sql))
              {
                echo "  you are not inserted";
              }
              else
               {
                echo "succesfully i nserted";
               }
               ?>