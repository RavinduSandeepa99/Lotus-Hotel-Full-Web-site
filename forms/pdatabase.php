<?php
require 'config.php';

$fname=$_POST["FirstName"];
$lname=$_POST["LastName"];
$mail=$_POST["Mail"];
$Passw=$_POST["Pword"];
$phonen=$_POST["Number"];
$pepl=$_POST["Peoples"];
$room=$_POST["Room"];


$sql="INSERT INTO accommodation(FirstName,LastName,Mail,password,Number,Peoples,Room)values('$fname','$lname','$mail','$Passw','$phonen','$pepl','$room')";
    			if($con->query($sql)){
    				     echo "Inserted Successfully";


    			}	else{
                           echo "Error:".$con->error;
                 }

$con->close();


?>