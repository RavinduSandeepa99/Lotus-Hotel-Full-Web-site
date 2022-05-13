<?php
require 'config.php';

$first=$_POST["firstname"];
$last=$_POST["lastname"];
$mail=$_POST["email"];
$Pass=$_POST["password"];
$people=$_POST["numberofpeople"];
$date=$_POST["time"];
$hall=$_POST["hallno"];


$sql="INSERT INTO wedding(firstname,lastname,email,password,numberofpeople,time,hallno)values('$first','$last','$mail','$Pass','$people','$date','$hall')";
    			if($con->query($sql)){
    				     echo "Inserted Successfully";


    			}	else{
                           echo "Error:".$con->error;
                 }

$con->close();


?>