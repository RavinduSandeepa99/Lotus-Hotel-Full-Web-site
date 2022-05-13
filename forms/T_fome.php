<!DOCTYPE html>
<html>

<head>

  <title>WEDDING FORM</title>
  <link rel="stylesheet" type="text/css" href="css/T_fome.css">
</head>

<body>
     <img src="img/logo.png" alt="logo" class="center">
	  <h1 style="color:white"><center>The Lotus Hotel</h1>
	  <h3 style="color:white"><center>Wedding Hall Booking</h3>
   <div class="row">
  <div class="col-75">
    <div class="container">
     <form  method="POST" action="thisarudatabase.php" id="form">

        <div class="row">
          <div class="col-50">
            <h3>Hall Preferences</h3>

              <div class="row">
              <div class="col-50">
                <label for="time">First Name</label>
                <input type="text" id="time" name="firstname" placeholder="Jone" required>
              </div>
              <div class="col-50">
                <label for="ntr">Last Name</label>
                <input type="text" id="ntr" name="lastname" placeholder="keen" required>
              </div>
            </div>

           <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text"  name="email" placeholder="john@example.com" id="email" onkeydown="validation()" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Please Type Valid Email" required>
             <p><span id="text0"></span> </p>
            <label for="adr"><i class="fa fa-doe-card-o"></i> Password</label>
            <input placeholder="********" type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                  <div id="message">
                              <h5>Password must contain the following:</h5>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                           </div>
            <label for="ppl"><i class="fa fa-institution"></i> Number of People</label>
             <input type="radio" id="male" name="numberofpeople" value="Between 50 and 150 " checked>Between 50 and 150<br>
              <input type="radio" id="female" name="numberofpeople" value="Between 150 and 300  ">Between 150 and 300 <br>
                 <input type="radio" id="other" name="numberofpeople" value="Between 300 and 600 ">Between 300 and 600  <br><br>

            <div class="row">
              <div class="col-50">
                <label for="time">Date and Time Duration</label>
                <input type="datetime-local" id="time" name="time"required>
              </div>
              <div class="col-50">
                <label for="ntr">Hall No</label>
                      <select name = "hallno" class="dropdown">
                        <option value = "Hall No : 402" selected>Hall No : 402</option>
                        <option value = "Hall No : 510">Hall No : 510</option>
                        <option value = "Hall No : 400">Hall No : 400</option>
                        <option value = "Hall No : 310">Hall No : 310</option>
                        <option value = "Hall No : 654">Hall No : 654</option>
                        <option value = "Hall No : 702">Hall No : 702</option>
                      </select>
              </div>
            </div>
          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Verify Payment via Same Email
        </label>
        <input type="submit" value="Submit Reservation" class="btn">

      </form>
    </div>
  </div>

</div>
 <h2><center>Thank You For Choosing Our Service!</h2>
 <p style="color:white">We will provide a good customer satisfaction</p>
   <script src="js/myScript.js"></script>
</body>
    <script src="js/log.js"></script>
</html>