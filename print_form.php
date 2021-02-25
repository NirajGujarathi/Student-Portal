<?php
session_start();
include "connect.php";

	// $student_id=  $_SESSION["id"];
$sql1 = "SELECT student_name ,student_mail,class,year,city  FROM student where student_id= 123";
$sql2= "SELECT to_station,	route_name, class_of_travel,	duration,	pass_from, pass_to, status FROM rail_form_detail where st_id=123";
        $result1 = $conn->query($sql1);
        
        if ($result1->num_rows > 0) 
        {
    
          while($row = $result1->fetch_assoc()) 
          {
                $db_name= $row["student_name"];
                $db_mail= $row["student_mail"];
                $db_branch= $row["class"];
                $db_year= $row["year"];
                $db_city= $row["city"];
          }
        
      	} else
      	 {
      	 	echo "can not connect to student db...";
      	 }

      	 $result2 = $conn->query($sql2);
      	  if ($result2->num_rows > 0) 
        {
    
          while($row = $result2->fetch_assoc()) 
          {
                $db_tostation= $row["to_station"];
                $db_routename= $row["route_name"];
                $db_classoftravel= $row["class_of_travel"];
                $db_duration= $row["duration"];
                $db_passfrom= $row["pass_from"];
                $db_passto= $row["pass_to"];
                $db_status= $row["status"];
          }
        
      	} else
      	 {
      	 	echo "can not connect to rail_form_detail db...";
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
	<body>
		
		
		<div class="container-fluid col-md-10 col-xs-offset-1" >
			<div id="register" >  
				<form id="concession" method="post" action="railway.php">
					<h3>Concession Form</h3>					  
				
				<fieldset class="col-md-8 col-lg-offset-2 col-md-offset-2">		
					<label  for="name">Name:</label>				
					<input class="form-control" selected disabled placeholder="First name					Middle name					Last name" type="text" id="name" name="user_name" value="<?php echo htmlspecialchars($db_name); ?>">					
				</fieldset>				
				<fieldset class="col-md-4">	
					<label for="mail">Email:</label>
					<input class="form-control" selected disabled placeholder="Email ID" type="email" id="mail" name="user_email" required value="<?php echo htmlspecialchars($db_mail); ?>">
				</fieldset>
				<fieldset class="col-md-4">	
					<label for="branch">Branch:</label>
					<input class="form-control" selected disabled type="text" id="branch" name="branch"  required value="<?php echo htmlspecialchars($db_branch); ?>">
				</fieldset>
				<fieldset class="col-md-4">	
					<label for="year">Year:</label>
					<input class="form-control" selected disabled type="text" id="year" name="year"  required value="<?php echo htmlspecialchars($db_year); ?>">
				</fieldset>

	     		
				<fieldset class="col-md-4">			
					<label for="name">Route-name: </label>
				<input type="text" selected disabled class="form-control" name='Railway_line' required  value="<?php echo htmlspecialchars($db_routename); ?>">
               
				</fieldset>
				

				<fieldset class="col-md-4">	
					<label for="name">Source Station:</label>  
					<input class="form-control" placeholder="From Station" selected disabled type="text" name="From_stations" id="fromstation" value="<?php echo htmlspecialchars($db_city); ?>" required>
					
				</fieldset>

				<fieldset class="col-md-4">
					<label for="name">Destination Station:</label>  
					<input type="text" selected disabled class="form-control" name='to_stations' value="<?php echo htmlspecialchars($db_tostation); ?>"  required>
		
				</fieldset>


				<fieldset class="col-xs-6">	
					<label for="travel_class">Class Of Travel:</label> 
					<input class="form-control" placeholder="class of travel" selected disabled type="text" name="travel_class"  value="<?php echo htmlspecialchars($db_classoftravel); ?>" required>
					
				</fieldset >
				<fieldset class="col-xs-6">
					<label for="duration">Monthly/Quarterly:</label>  
					<input class="form-control" placeholder="From Station" selected disabled type="text" name="duration"  value="<?php echo htmlspecialchars($db_duration); ?>" required>

				</fieldset>
				<br>

				<fieldset class="col-xs-6">	
							
					<label for="date">From date:</label><br>
					<input class="form-control" placeholder="From date:" type="date" name="from" id="fromdate" value="<?php echo htmlspecialchars($db_passfrom); ?>" required selected disabled>
				</fieldset>
				
				<fieldset class="col-xs-6">
					<label for="date">Expiry date:</label><br>
					<input class="form-control" placeholder="To date:" type="date" name="to" id="todate"  value="<?php echo htmlspecialchars($db_passto); ?>" required selected disabled>
					
				</fieldset>

				<fieldset class="col-xs-8 col-xs-offset-4" style="padding-top: 15px;">
					<button type="submit" > PRINT </button>
					
				</fieldset>
					
			</form>
			</div>
		</div>
			

	</body>

</html>

