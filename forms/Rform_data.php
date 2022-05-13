<?php
require 'config.php';

$FirstN=$_POST["First_Name"];
$LastN=$_POST["Last_Name"];
$EMail=$_POST["E_Mail"];
$Pass=$_POST["Password"];
$PhoneN=$_POST["Phone_Number"];
$MealP=$_POST["Meal_Period"];
$NumberPeople=$_POST["Number_of_People"];
$Detas=$_POST["Restaurant"];

$sql="INSERT INTO dining(First_Name,Last_Name,E_Mail,Password,Phone_Number,Meal_Period,Number_of_People,Restaurant)values('$FirstN','$LastN','$EMail','$Pass','$PhoneN','$MealP','$NumberPeople','$Detas')";
    			if($con->query($sql)){
    				     echo "Inserted Successfully";


    			}	else{
                           echo "Error:".$con->error;
                 }

$con->close();
?>



