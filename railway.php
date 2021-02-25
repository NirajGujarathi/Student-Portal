<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
session_start();
include "connect.php";
$name = $email = $college = $id = $contact = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name = test_input($_POST["user_name"]);
  $email = test_input($_POST["user_email"]);
    $branch = test_input($_POST["branch"]);
      $year = test_input($_POST["year"]);
  $address= test_input($_POST["user_address"]);



  $From_stations = test_input($_POST["From_stations"]);

  $Railway_line = test_input($_POST["Railway_line"]);

  $travel_class = test_input($_POST["travel_class"]);
  $duration = test_input($_POST["duration"]);
  $previous_pass = test_input($_POST["previous_pass"]);

  $from_date = test_input($_POST["from"]);
  $duration = test_input($_POST["duration"]);
  $to_date = test_input($_POST["to"]);
  $to_stations = test_input($_POST["to_stations"]);

		   list ($receiptfilename, $receiptpath) = uploadFile("receipt");
		
			list ($previous_passfilename, $previous_passpath) = uploadFile("pass");
		
		echo $name."<br>";

		$st_id=  $_SESSION["id"];
		$sql_ins="INSERT INTO rail_form_detail ( st_id ,	from_station,	to_station,	route_name, class_of_travel,	duration,	pass_from, pass_to, previous_pass, receipt_path, receipt_name, pass_path, pass_name, address	,status) VALUES ('$st_id' ,'$From_stations', '$to_stations', '$Railway_line', '$travel_class', '$duration', '$from_date', '$to_date', '$previous_pass', '$receiptpath' , '$receiptfilename' ,'$previous_passpath', '$previous_passfilename ', '$address', 'not_ready') ";

		if ($conn->query($sql_ins) === TRUE) 
          {
             echo "New record created successfully";
              echo "<fieldset>";
               echo "     <a href='profile.php'><button  type='button' class='btn btn-primary'>Student Portal(PROFILE)</button></a>                               
                </fieldset> ";
          }
        else
          {
            echo "record can not be created";
          }
	 
	
	$conn->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function uploadFile($attributename)
{
  
  $og_file_name = $_FILES[$attributename]['name'];
  
  if(strlen($og_file_name) == 0)
  {

    return array("", "");
  }
    $file = time()."-".$_FILES[$attributename]['name'];
    $file_loc = $_FILES[$attributename]['tmp_name'];
	  $file_size = $_FILES[$attributename]['size'];
	  $file_type = $_FILES[$attributename]['type'];
	  $folder="uploads/";
	  move_uploaded_file($file_loc,$folder.$file);
	  return array($og_file_name, $folder.$file);
}


?>
</html>
