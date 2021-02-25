<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="Admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type = "text/javascript">

function myAjax (no) {
$.ajax( { type : 'POST',
          data : {'form_id': no},
          url  : 'update.php',             
          success: function ( data ) {
             //alert( data );               
          },
          error: function ( xhr ) {
            alert( "error" );
          }
        });
}
</script>

</head>
<body>
<?php
include "connect.php";
$query="SELECT * FROM rail_form_detail where status ='approved'";
$results = mysqli_query($conn,$query);

    echo "<table >";
    echo "<tr>";
    echo "<th>Form ID</th>";
    echo "<th>Student ID</th>";
    echo "<th>From Station</th>";
    echo "<th>To Station</th>";
    echo "<th>Route Name</th>";
    echo "<th>Class Of Travel</th>";
    echo "<th>Duration</th>";
    echo "<th>Pass from</th>";
    echo "<th>Pass to</th>";
    echo "<th>Previous Pass</th>";
    echo "<th>Address</th>";
    echo "<th></th>";
    echo "</tr>";     
    while ($row = mysqli_fetch_array($results)) {
        $id = $row['form_id'];
        echo '<tr>';
        echo "<td>" . $row['form_id'] . "</td>" ;
        echo "<td>" . $row['st_id'] . "</td>" ;
        echo "<td>" . $row['from_station'] . "</td>" ;
        echo "<td>" . $row['to_station'] . "</td>"; 
        echo "<td>" . $row['route_name'] . "</td>"; 
        echo "<td>" . $row['class_of_travel'] . "</td>"; 
        echo "<td>" . $row['duration'] . "</td>"; 
        echo "<td>" . $row['pass_from'] . "</td>"; 
        echo "<td>" . $row['pass_to'] . "</td>"; 
        echo "<td>" . $row['previous_pass'] . "</td>"; 
        echo "<td>" . $row['address'] . "</td>"; 
        echo "<td>  <input type= \"submit\" style= \"cursor:pointer\" value = \"Approve\" name = \"submit\" class = \"button\" onclick = \"myAjax($id)\"; >  </td>";
        echo "</tr>";
    }
    echo '</table>';
    ?>

</body>
</html>