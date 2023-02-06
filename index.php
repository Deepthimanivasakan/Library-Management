<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		 Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<style type="text/css">
    
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
    section .sec_img
{
	height: 550px;
	width:1350px;
	margin-top: 0px;
	 position: relative;
	 background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	background-image: url("images/inhome.jpg");
}
    .box
{
	height: 300px;
	width: 450px;
	background-color: black;
	margin: 70px auto;
	opacity: .8;
	color: white;
}

</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/9.jpeg">
			<h1 style="color: white;"> LIBRARY MANAGEMENT SYSTEM</h1>
		</div>
    
        <?php
         if(isset($_SESSION['login_user']))
         {
            ?>
           <nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
                    <li><a href="registration.php">SIGNUP</a></li>
				   <li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav> 
            <?php 
         }
         else
         {
         ?>
            <nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="login.php">LOGIN</a></li>
					 <li><a href="registration.php">SIGNUP</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav> 
        <?php
         }
        ?>
			
		</header>
		<section>
		<div class="sec_img">
	
			<br><br><br>
			
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcom to library</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Opens at: 08:00 AM </h1><br>
				<h1 style="text-align: center;font-size: 25px;">Closes at: 08:00 PM</h1><br>
            </div>
		</div>
		</section>
		
	</div>
    <?php
     include "footer.php";
    ?>
</body>

</html>
