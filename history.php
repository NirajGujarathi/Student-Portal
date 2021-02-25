<?php
session_start();
include "connect.php";

    $student_id=  $_SESSION["id"];
?>

<html>
    <head>
        <link rel="stylesheet" href="Admin.css">
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
        <fieldset>
                    <a href="profile.php"><button  type="button" class="btn btn-primary">Student Portal(PROFILE)</button></a>                               
                </fieldset> 
        
        <div class="container-fluid col-md-10 col-xs-offset-1" >
           <?php
            include "connect.php";
            $query="SELECT * FROM rail_form_detail where st_id= $student_id";
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
                echo "<th>Status</th>";
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
                    echo "<td>" . $row['status']. "</td>"; 
                    echo "</tr>";
                }
                echo '</table>';
                ?>

                
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


