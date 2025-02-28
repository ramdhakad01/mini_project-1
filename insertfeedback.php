<?php
 include("confige.php");
 $name=$_POST['name'];
 $email=$_POST['email'];
 $sub=$_POST['sub'];
 $messege=$_POST['message'];
 $sql="insert into feedback_user ( `id`,`name`,`email`,`subject`,`message`)
              values('NULL','".$name."','".$email."','".$sub."','".$messege."')";
              if(mysqli_query($conn,$sql))
              {
                echo "<script>
                    alert('Thankyou for your feedback!');
                    window.location.href = '#'; // Redirect to login page
                  </script>";
              }
              
              else
               {
                echo "succesfully i nserted";
               }
               ?>