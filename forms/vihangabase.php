<?php
require 'config.php';

$first=$_POST["first_name"];
$last=$_POST["last_name"];
$mail=$_POST["e_mail"];
$Pass=$_POST["psw"];
$date=$_POST["date_time"];
$mobile=$_POST["phone"];
$food=$_POST["food_time"];
$meet=$_POST["meetings_time"];
$Peoples=$_POST["People"];


$sql="INSERT INTO meetings(first_name,last_name,e_mail,psw,date_time,phone,food_time,meetings_time,People)values('$first','$last','$mail','$Pass','$date','$mobile','$food','$meet','$Peoples')";
    			if($con->query($sql)){
    				     echo "Inserted Successfully";


    			}	else{
                           echo "Error:".$con->error;
                 }

$con->close();


?>