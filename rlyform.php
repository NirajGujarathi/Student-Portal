<?php
session_start();
include "connect.php";

	$student_id=  $_SESSION["id"];
$sql1 = "SELECT student_name ,student_mail,class,year,city  FROM student where student_id= $student_id";
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

	<!-- <script>  -->
		 <!-- // $('firstdatepicker').change(function() {
			//  var date2 = $('firstdatepicker').datepicker('getDate', '+1d'); 
			//  date2.setDate(date2.getDate()+1); 
			//  $('seconddatepicker').datepicker('setDate', date2);
			// });

		 // $("#fromdate").on('change',function() {
   //                  var value = $("#fromdate").val();
   //                 //assuming value in format of 12/01/2001 or 12/02/15
   //                  var current = value.slice(-2) //this gets the current year - "15"
   //                  var years = 2;
   //                  current = parseInt(current) + years // 15+2
   //                  value = value.slice(0,-2) //12/02/
   //                  value = value.toString().concat(current) //12/02/17

   //                  $("#todate").val(value); //this is how u set the value
   //              }); -->

		<!--  <script type="text/javascript">

			Date.prototype.toString = function () {
				return [this.getMonth () < 9 ? '0' + (this.getMonth() + 1) : this.getMonth() + 1, this.getDate() < 10 ? '0' + this.getDate() : this.getDate(), this.getFullYear()].join ('/')
			}

			onload = function () {
				document.forms[0].from.onchange = function () {
					var d = new Date (this.value)
					this.value = d
					d.setDate (d.getDate() + 31)
					this.form.to.value = d
				}
				document.forms[0].to.onchange = function () {
					var d = new Date (this.value)
					this.value = d
					d.setDate (d.getDate() - 31)
					this.form.from.value = d
				}
				document.forms[0].from.value = new Date ()
				document.forms[0].from.onchange()
			}

		</script>
 -->
	</script>
	<body>
		<div class="header">
			<fieldset>
				<a href="stupo.html"><img class="logo" src="StuPoLogo.png"></a>
				<a href="stupo.html"><button name="stupo" type="button" id="stupo">Student Portal</button></a>					  			 
				
				<a href="login.html"><button name="login" type="button" id="login">LOG OUT</button></a>	
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
					<fieldset>
                    <a href="profile.php"><button  type="button" class="btn btn-primary">Student Portal(PROFILE)</button></a>                               
                </fieldset>
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
				<select class="form-control" name='Railway_line' required>
                            <option value="" selected disabled>Route-name:</option>        
                            <option>Central-Line</option>
                            <option>Western-Line</option>
							<option>Harbour-Line</option>
				</select>
				</fieldset>
				

				<fieldset class="col-md-4">	
					<label for="name">Source Station:</label>  
					<input class="form-control" placeholder="From Station" selected disabled type="text" name="From_stations" id="fromstation" value="<?php echo htmlspecialchars($db_city); ?>" required>
					
				</fieldset>
				<fieldset class="col-md-4">
					<label for="name">Destination Station:</label>  
					
				<select class="form-control" name='to_stations' required>
                            <option value="" selected disabled></option>       
                            <option>Vidyavihar</option>
                            <option>Tilaknagar</option>
							
				</select>					
				</fieldset>


				<fieldset class="col-xs-6">	
					<label for="travel_class">Class Of Travel:</label> 
					<select class="form-control" name='travel_class' required>
                            <option value="" selected disabled></option>       
                            <option>I 	(first class)</option>
                            <option>II	(second class)</option>
							
					</select>
					
				</fieldset >
				<fieldset class="col-xs-6">
					<label for="duration">Monthly/Quarterly:</label>  
					<select class="form-control" name='duration' required>
                            <option value="" selected disabled></option>       
                            <option>Monthly 		(1 months)</option>
                            <option>QUARTERLY 	(3 months)</option>
							
					</select>
					
				</fieldset>
				<br>
				<fieldset class="col-xs-6">	
							
					<label for="date">From date:</label><br>
					<input class="form-control" placeholder="From date:" type="date" name="from" id="fromdate" max="<?php echo date('Y-m-d'); ?>"required>
				</fieldset>
				
				<fieldset class="col-xs-6">
					<label for="date">Expiry date:</label><br>
					<input class="form-control" placeholder="To date:" type="date" name="to" id="todate" required>
					
				</fieldset>


				<fieldset class="col-md-6" class="col-xs-12">	
					<label for="previous_pass">Previous_pass Details:</label>
					<input class="form-control" type="text" id="prv_pass" name="previous_pass"  required>
				</fieldset>
				<fieldset class="col-md-6" class="col-xs-12">	
					<label for="previous_pass">Voucher number:</label>
					<input class="form-control" type="text"  name="voucher_no"  >
				</fieldset>

				<fieldset class="col-xs-6">
					<label > Attach FEE RECEIPT COPY:</label><br>
					  <input  type="file" name="receipt" accept="image/*">
				</fieldset>
				<fieldset class="col-xs-6">
					<label > Attach Previous-pass  Copy:</label><br> 
					  <input  type="file" name="pass" accept="image/*"> 
					  
				</fieldset>	 
				<fieldset class="col-xs-12">					
					<label for="name">Address:</label>
					<textarea class="form-control" placeholder="Address" id="address" name="user_address" required> </textarea>
				</fieldset>					
				
					<button type="submit" id="submit" onclick="alert('Form was submitted successfully !')" >SUBMIT </button>
					<button type="reset"  id="reset" onclick="alert('Reset... Are you sure?')" style="float: right;">RESET </button>   
			</form>
			</div>
		</div>
			
		<footer class="footer-distributed col-md-12" id="myFooter">            
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

