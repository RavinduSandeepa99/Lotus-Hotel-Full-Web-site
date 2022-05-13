<!DOCTYPE html>
<html>
<head>
    <title>Meetings Booking Form</title>
    <link rel="stylesheet"  type="text/css" href="css/v_fome.css">

</head>
<body>
 <img src="img/logo.png" alt="logo" class="llogo">
    <div class="regform"><h1>Meetings Booking Form</h1></div>
    <div class="main">
        <form method="POST" action="vihangabase.php" id="form">
            <div id="name">
                <h2 class="name">Name</h2>
                <input class="firstname" type="text" name="first_name" required><br>
                <label class="firstlabel">First Name</label>
                <input class="lastname" type="text" name="last_name" required><br>
                <label class="lastlabel">Last Name</label>
            </div>

            <h2 class="name">E-Mail</h2>
            <input class="company" type="text" name="e_mail" id="email" onkeydown="validation()"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Please Type Valid Email" required>
              <span id="text0"></span>
             <h2 class="name">Password</h2>
             <input class="password" type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              <div id="message">
                              <h5>Password must contain the following:</h5>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                           </div>
            <h2 class="name">Arrival Date & Time</h2>
            <input type="datetime-local" class="date" id="date" name="date_time">


            <h2 class="name">Phone</h2>
            <input class="number" type="text" name="phone" required>
            <label class="phone-number">Phone Number</label>

            <h2 class="name">Food Menu Type</h2>

            <select class="option" name="food_time" required>
                <option disabled="disabled" selected="selected">--Choose Option</option>
                <option value="BREAKFAST">BREAKFAST</option>
                <option value="LUNCH">LUNCH</option>
                <option value="DINNER">DINNER</option>
            </select>

            <h2 class="name">Meetings Type</h2>

            <select class="option1" name="meetings_time" required>
                <option disabled="disabled" selected="selected">--Choose Option</option>
                <option value="MEETINGS">MEETINGS</option>
                <option value="MICE">MICE</option>
                <option value=">MEETING VENUES">MEETING VENUES</option>
            </select>

                    <h2 class="name"> Number of People</h2>
                      <input type="radio" id="male" name="People" class="radio" value="Between 5 and 10" checked><p>Between 5 and 10</p>
                      <input type="radio" id="female" name="People" class="radio"  value="Between 10 and 25"><p>Between 10 and 25</p>
                      <input type="radio" id="other" name="People" class="radio"   value="Between 25 and 45 "><p>Between 25 and 45 </p>

            <h2 id="policy"> Accept Privacy Policy Terms</h2>
            <input type="checkbox" id="policy" name="policy" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
<script src="js/log.js"></script>
</html>