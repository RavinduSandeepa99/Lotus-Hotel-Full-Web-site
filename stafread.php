<!DOCTYPE html>
<html>
<head>
<style>
body{
    font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em;
  font-weight:300;
  line-height:0.5em;
  text-align: center;
  color: #CCFF00;
}

h2 {
  font-size:3em;
  font-weight:300;
  line-height:0.5em;
  text-align: left;
  color: #4DC3FA;
}



table {

    width: 90% ;
    box-shadow: 0 1px 3px rgba(0,0,0,0.5)  ;

}

th {
  color:#FF9900;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:15px;
  padding-left:15px;
  text-align:center;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;

}


td{
 background:#FFFFFF;
  padding:10px;
  text-align:left;
  vertical-align:middle;
  font-weight:200;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
  border-bottom:4px solid #9ea7af;


}
</style>
</head>
<body>
<h1>Booking Information</h1>

 <!-- DINING -->
<?php
    require'config.php';
  $sql="select First_Name,Last_Name,E_Mail,Password,Phone_Number,Meal_Period,Number_of_People,Restaurant from dining";

  $result=$con->query($sql);

        if($result->num_rows > 0){
        echo "<h2>Dining Table Booking Information</h2>";
        echo "<table>
                    <tr>
                    <th>First_Name</th>
                    <th>Last_Name</th>
                    <th>E_Mail</th>
                    <th>Password</th>
                    <th>Phone_Number</th>
                    <th>Meal_Period</th>
                     <th>Number_of_People</th>
                     <th>Restaurant</th>
                    </tr>";
         while($row=$result -> fetch_assoc()){
            echo "<tr><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["E_Mail"]."</td><td>".$row["Password"]."</td><td>".$row["Phone_Number"]."</td><td>".$row["Meal_Period"]."</td><td>".$row["Number_of_People"]."</td><td>".$row["Restaurant"]."</td></tr>";
         }
             echo "</table>";
      }
      else
      {
      	echo"No Result";
      }
      $con->close();


?>

 <!-- MEETINGS -->
<?php
    require'config.php';
  $sql="select first_name,last_name,e_mail,psw,date_time,phone,food_time,meetings_time,People from meetings";

  $result=$con->query($sql);

        if($result->num_rows > 0){
        echo "<h2>Meeting Booking Information</h2>";
        echo "<table>
                    <tr>
                    <th>First_Name</th>
                    <th>Last_Name</th>
                    <th>E_Mail</th>
                    <th>Password</th>
                    <th>Date_Time</th>
                    <th>PhoneNumber</th>
                     <th>Food_Time</th>
                     <th>Meetings_Time</th>
                      <th>People</th>
                    </tr>";
         while($row=$result -> fetch_assoc()){
            echo "<tr><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["e_mail"]."</td><td>".$row["psw"]."</td><td>".$row["date_time"]."</td><td>".$row["phone"]."</td><td>".$row["food_time"]."</td><td>".$row["meetings_time"]."</td><td>".$row["People"]."</td></tr>";
         }
             echo "</table>";
      }
      else
      {
      	echo"No Result";
      }
      $con->close();


?>

 <!-- WEDDINGS -->
<?php
  require'config.php';
  $sql="select firstname,lastname,email,password,numberofpeople,time,hallno from wedding";

  $result=$con->query($sql);

        if($result->num_rows > 0){
        echo "<h2>Wedding Booking Information</h2>";
        echo "<table>
                    <tr>
                    <th>First_Name</th>
                    <th>Last_Name</th>
                    <th>E_Mail</th>
                    <th>Password</th>
                    <th>number_of_people</th>
                    <th>Date_&_Time</th>
                     <th>Hall_No</th>
                    </tr>";
         while($row=$result -> fetch_assoc()){
            echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td><td>".$row["numberofpeople"]."</td><td>".$row["time"]."</td><td>".$row["hallno"]."</td></tr>";
         }
             echo "</table>";
      }
      else
      {
      	echo"No Result";
      }
      $con->close();


?>

 <!-- ACCOMMODATION -->
<?php
    require'config.php';
  $sql="select FirstName,LastName,Mail,password,Number,Peoples,Room from accommodation";

  $result=$con->query($sql);

        if($result->num_rows > 0){
        echo "<h2>Dining Table Booking Information</h2>";
        echo "<table>
                    <tr>
                    <th>First_Name</th>
                    <th>Last_Name</th>
                    <th>E_Mail</th>
                    <th>Password</th>
                    <th>Phone_Number</th>
                     <th>Number_of_People</th>
                     <th>Restaurant</th>
                    </tr>";
         while($row=$result -> fetch_assoc()){
           echo "<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Mail"]."</td><td>".$row["password"]."</td><td>".$row["Number"]."</td><td>".$row["Peoples"]."</td><td>".$row["Room"]."</td></tr>";
         }
             echo "</table>";
      }
      else
      {
      	echo"No Result";
      }
      $con->close();


?>
</body>
</html>