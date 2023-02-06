 <?php
 $servername="localhost";
 $username="root";
 $password="";
 $conn=mysqli_connect($servername,$username,$password);
 if(!$conn)
 {
     die("connection failed".mysqli_connect_error());
 }
 $sql="Create database msc";
 if(mysqli_query($conn,$sql))
 {
     echo"database created successfully";
 }
 else{
     echo"Error".mysqli_error($conn);
 }
 mysqli_close($conn);
 ?>