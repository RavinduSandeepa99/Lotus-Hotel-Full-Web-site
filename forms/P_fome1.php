<!DOCTYPE HTML>

<html>

<head>
  <title>ACCOMMODATION FORM-1</title>
  <link rel="stylesheet" href="css/P_fome1.css" />
</head>

<body>
    <img src="img/logo.png" alt="logo" class="Hlogo">
   <div class="wrapper">
    <div class="title">
       STANDARD BOOKING FORM
    </div>
    <form  method="POST" action="pdatabase.php"  id="form">
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="FirstName" required>
       </div>
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="LastName" required>
       </div>
           <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="Mail" id="email" onkeydown="validation()" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Please Type Valid Email" required >
       </div>
        <span id="text0"></span>
       <div class="inputfield">
          <label>Password</label>
          <input class="input" type="password" id="psw" name="Pword"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
       </div>
        <div id="message">
                              <h5>Password must contain the following:</h5>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                           </div>
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="Number" required>
       </div>

      <div class="inputfield">
          <label> Date & Time</label>
          <input type="datetime-local" class="input" name="Date" required>
       </div>
      <div class="inputfield">
          <label>Number of People</label>
          <input type="radio" id="one" name="Peoples" class="radio" value="1 " checked required> <label>1 </label>
          <input type="radio" id="two" name="Peoples" class="radio"  value="2 " required> <label>2</label>
          <input type="radio" id="three" name="Peoples" class="radio"   value="3" required> <label>3  </label>
       </div>
       <input type="radio" id="STANDARD" name="Room" class="STANDARD"   value="STANDARD" checked>
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div>
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
    <br>
    </form>
</div>
</body>
  <script src="js/log.js"></script>
</html>