<?php
 include "connection.php";
 include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
.reg_img
{
	height: 700px;
	width: 1350px;
	margin-top: 0px;
	background-image: url("images/arr.jpg");
	position: relative;
	 background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.box2
{
	height: 560px;
	width: 400px;
	background-color: black;
	margin: 0px auto;
	opacity: .7;
	color: white;
	padding: 20px;
}
      
section{
margin-top:-20px;
}
</style>
</head>
<body>



<section>
  <div class="reg_img">

    <br><br><div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>
      <form name="Registration" action="" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="First Name" data-nandhi=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" data-nandhi=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" data-nandhi=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" data-nandhi=""> <br>
        

          <input class="form-control" type="text" name="email" placeholder="Email" data-nandhi=""><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone Number " data-nandhi=""><br>
          <center><input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color:black; width:70px; height:30px;"></center></div>
      </form>
     
    </div>
  </div>
</section>
   <?php
if(isset($_POST['submit']))
{
    $count=0;
    $sql="SELECT username from `admin`";
    $res=mysqli_query($db,$sql);
    while($row=mysqli_fetch_assoc($res))
    {
        if($row['username']==$_POST['username'])
        {
            $count=$count+1;
        }
    }
    if($count==0)
    {
        
	mysqli_query($db,"INSERT INTO `admin` VALUES('', '$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]',' $_POST[email]', '$_POST[contact]', 'p.png', '');");

     ?>
      <script type="text/javascript">
        window.location="../login.php"
      </script>
     <?php
  }
    else{
        
        
        ?>
    <script type="text/javascript">
        alert("Username already exist");
    </script>
    
    <?php
        
    }
}
?>
</body>
    