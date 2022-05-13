<?php
$con=new mysqli("localhost","root","","lotus_hotel");
 if($con-> connect_error)
{
die("Connection failed:".$con-> connect_error);
}