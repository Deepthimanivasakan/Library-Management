
<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  
  <style type="text/css">
      .img{
		 background-image: url(images/lo.jpg);
          position: relative;
	      background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
}
    .box1
{
	height: 550px;
	width: 450px;
	background-color: black;
	margin: 70px auto;
	opacity: .8;
	color: white;
	padding: 20px;
}
label
      {
          font-size: 18px;
          font-weight: 600;
      }
  </style>   
</head>
<body>

<section>
  <div class="img">
   <br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
      <form  name="login" action="" method="post">
          <b><p style="padding-left:50px;font-size: 5x; font-weight: 700;">Login as:</p> </b>
          
          <input style="margin-left: 50px; width:18px;" type="radio" name="user" id="admin" value="admin">
          <label for="admin">Admin</label>
          <input style="margin-left: 50px; width:18px;" type="radio" name="user" id="student" value="student" checked="">
          <label for="student">Student</label>
    
        
        <div class="login">
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px"> 
        </div>
      
      <p style="color: white; padding-left: 15px;">
        <br><br>
        <a style="color: yellow; text-decoration: none;" href="update_password.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        New to this website?<a style="color: yellow; text-decoration: none;" href="registration.php">&nbsp Sign Up</a>
      </p>
    </form>
    </div>
  </div>
</section>

   <?php

    if(isset($_POST['submit']))
    {
      if($_POST['user']=='admin')
      {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' and password='$_POST[password]' and status='yes';");
      $row= mysqli_fetch_assoc($res);
            
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
        
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
             
         <!---- <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div> --->   
        <?php
      }
      else
      {
          /*----------if username & password matches-----*/
        $_SESSION['login_user'] = $_POST['username']; 
        $_SESSION['pic']= $row['pic'];
        $_SESSION['username']='';  
        ?>
          <script type="text/javascript">
            window.location="admin/profile.php"
          </script>
        <?php
      }
      }
      else
      {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              <!--
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              -->
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['username']; 
        $_SESSION['pic']=$row['pic'];  

        ?>
          <script type="text/javascript">
            window.location="student/profile.php"
          </script>
        <?php
      }
      }
    }

  ?>

</body>
</html>
