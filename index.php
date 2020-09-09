<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "select * from logintb WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: admin-panel.php");
      }else {
      	echo "<script> alert('Your Login Name or Password is invalid. ');</script>";
		echo "<script>window.open('index.php','_self')</script>";
         
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
   <title>Login Page</title>
   <link rel="stylesheet" type="text/css" href="style.css">  
</head>
<body>
    <div class="login-box">
    <img src="avatarr.png" class="avatar">
        <h1>Login Here</h1>
    <!-- login form layout -->
   <form id='login' action="" method="post">  
      <label>UserName:</label>
      <input type='text' name='username' id='u'><br>
      <label>Password:</label>
      <input type='password' name='password' id='p'><br>
      <input type='submit' name='submit' value='Submit' id="login_button">
   </form>
</body>
</html>


