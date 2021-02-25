<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "connect.php";

		function func($data){
			global $conn;
			//$query="DELETE FROM rail_form_detail WHERE roll_number = $data";
			$query = "UPDATE rail_form_detail SET status='approved' WHERE form_id=$data";
			$results = mysqli_query($conn, $query);
		}

		 if(isset(($_POST['form_id']))){
		 	func($_POST['form_id']);
		 }

	?>

</body>
</html>
