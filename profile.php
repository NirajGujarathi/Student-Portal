<?php
session_start();
include "connect.php";

	$student_id=  $_SESSION["id"];
$sql1 = "SELECT student_name   FROM student where student_id= $student_id";
        $result1 = $conn->query($sql1);
        
        if ($result1->num_rows > 0) 
        {
    
          while($row = $result1->fetch_assoc()) 
          {
                $db_name= $row["student_name"];
             
          }
        
      	} else
      	 {
      	 	echo "can not connect to student db...";
      	 }

?>

<html>
	<head>
		<link rel="stylesheet" href="cssrailway.css">
		<link rel="stylesheet" href="hdrftr.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		
	</head>


	</script>
	<body>
		<div class="header">
			<fieldset>
				<a href="stupo.html"><img class="logo" src="StuPoLogo.png"></a>
				<a href="stupo.html"><button name="stupo" type="button" id="stupo">Student Portal</button></a>					  			 
				
				<a href="logout.php"><button name="login" type="button" id="login">LOG OUT</button></a>	
			</fieldset>
			<fieldset><ul>			
				<li><a class="active" href="stupo.html">Home</a></li>
				<li><a href="#blah">Template</a></li>
				<li><a href="#blah">What's New</a></li>
				<li><a href="#blah">About Us</a></li>
				<li><a href="#blah">Contact Us</a></li>
			</ul></fieldset>
		</div>		
		
		<div class="container-fluid col-md-10 col-xs-offset-1" >
			<div id="register" >  
				<center><h1>Hi, <?php echo"$db_name" ?></h1></center>
			<div style="border-width: 2px;border-style: double; " class="col-xs-12 col-sm-6">
				<center>
				<a href="rlyform.php"><button  type="button" class="btn btn-success">Railway concession form</button></a>   
				<br><hr class="styleline">
				<a href="history.php"><button  type="button" class="btn btn-info">History</button></a>
				<br><hr class="styleline">
				<a href="display.php"><button  type="button" class="btn btn-warning">all pending request at admin site</button></a>  <hr class="styleline">
				</center>
		
			</div>

			<div class="col-sm-6 col-xs-12">
				<img src="pic.jpg">

			</div>
			<br>
		</div>
			
		<footer class="footer-distributed col-md-12 col-sm-12" id="myFooter">            
	   <div class="container text-center">
		   <div class="footer-left col-sm-4">
				<a href="#">Made by The Triplets</a>
			</div>
			<div class="footer-center col-sm-4">          			
				<a href="index.html/#about">About Us</a>
				<a href="index.html/#contact">Contact Us</a> 
			</div>
			<div class="footer-right social-icons col-sm-4">
				<a href="#" class="icon"><i class="fa fa-twitter"></i></a>
				<a href="#" class="icon"><i class="fa fa-facebook"></i></a>
				<a href="#" class="icon"><i class="fa fa-github"></i></a>
			</div>
		</div>        
	</footer>
	</body>

</html>

