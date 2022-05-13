<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEDDING REGISTRATION FORM-2</title>
    <link rel="stylesheet" href="css/R_fome.css" />
</head>
<body>
    <section class="hero">
        <div class="card">
            <div class="reg-form">
                <span>Welcome to CENTRAL</span>
                <div class="form-header">
                    <span>BOOKING CENTRAL DINING TABLE</span>
                </div>
             <form method="POST" action="Rform_data.php" id="form">
                <div class="form-body">
                    <div class="input-container">
                        <label for="">First Name:</label>
                        <input class="input" type="text" name="First_Name"  required>
                    </div>
                        <div class="input-container">
                        <label for="">Last Name:</label>
                        <input class="input" type="text" name="Last_Name"  required>
                    </div>
                    <div class="input-container">
                        <label for="">E-mail</label>
                        <input class="input" type="text" name="E_Mail"  id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Please Type Valid Email" onkeydown="validation()">
                    </div>
                    <span id="text0"></span>
                    <div class="input-container">
                        <label for="">Password</label>
                        <input class="input" type="password" id="psw" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                <div id="message">
                    <h5>Password must contain the following:</h5>
                       <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                         <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
                    <div class="input-container">
                        <label for="">Phone Number</label>
                        <input class="input" type="text" name="Phone_Number" required>
                    </div>
                    <div class="input-container">
                       <label for="">Meal Period</label>  <br>
                    </div>
                    <select class="option"  name="Meal_Period" required>
                       <option disabled="disabled" selected="selected">Choose Option</option>
                       <option>Daily dinner buffet  </option>
                       <option>Daily ala carte</option>
                   </select>
                     <br>
                        <br>
                    <div class="input-container">
                       <label for="">Number of People</label>
                    </div>
                       <input type="radio" id="male" name="Number_of_People"class="radio" value="Between5 " checked>Between 2 and 4
                       <input type="radio" id="female" name="Number_of_People" class="radio"  value="Between10 ">Between 4 and 10
                         <br>
                            <br>
                    <div class="form-footer">
                          <input type="radio" name="Restaurant" class="Shang"  value="Central" checked>
                         <input type="checkbox" required>This Details Correct
                         <button class="signup-btn">Book a Table</button>
                    </div>
            </div>
    </form>
     </div>
            <div class="girl-img">
                <img src="img/2.jpg" alt="2">
                <img class="imgg" src="img/logo.png" alt="">
            </div>
        </div>
    </section>
</body>
<script src="js/log.js"></script>
</html>