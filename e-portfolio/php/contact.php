<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My e-Portfolio/Contact Me</title>
    <link rel="stylesheet" href="..\css/contact.css">
    <link rel="stylesheet" href="..\css/nav.css">
    <link rel="stylesheet" href="..\css/footer.css">
    <!-- <link rel="stylesheet" href="..\php/contact.php"> -->
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <div><a href="..\index.html">Home</a></div>
                </li>
                <li>
                    <div><a href="education.html">Education</a></div>
                </li>
                <li>
                    <div><a href="experience.html">Experience</a></div>
                </li>
                <li>
                    <div><a href="projects.html">Projects</a></div>
                </li>
                <li>
                    <div><a href="contact.html">Contact Me</a></div>
                </li>
            </ul>
        </nav>
    </header>

    <?php
// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $reasonErr = $serviceErr = "";
$fname = $lname = $email = $reason = $comment = $service = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["lname"])) {
    $lnameErr = "Last name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
 
  if (empty($_POST["reason"])) {
    $reasonErr = "Reason is required";
  } else {
    $reason = test_input($_POST["reason"]);
  }

  if (empty($_POST["reason"])) {
    $reasonErr = "Reason is required";
  } else {
    $reason = test_input($_POST["reason"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <section>
        <form class="form-contain" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" name="fname" value="<?php echo $fname;?>">
                <span class="error">* <?php echo $fnameErr;?></span>
            </div><br>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" value="<?php echo $lname;?>">
                <span class="error">* <?php echo $lnameErr;?></span>
            </div> <br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" placeholder="you@email.com" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
            </div><br>
            <div class="form-group">
                <label for="reason">Reason of Contact:</label>
                <div class="radio-option">
                    <label class="radio-label">
                        <input type="radio" name="reason" <?php if (isset($reason) && $reason=="projects") echo "checked";?>  value="projects"> Projects</label> <br>
                    <label class="radio-label">
                        <input type="radio" name="reason" <?php if (isset($reason) && $reason=="thesis") echo "checked";?> value="thesis"> Thesis
                    </label><br>
                    <label class="radio-label">
                        <input type="radio" name="reason" <?php if (isset($reason) && $reason=="meeting") echo "checked";?> value="meeting"> Meeting
                    </label>
                </div>
                <span class="error">* <?php echo $reasonErr;?></span>
            </div><br>
            <div class="form-group">
                <label for="service">Service:</label>
                <div class="checkbox-option">
                    <label class="checkbox-label">
                        <input type="checkbox" name="service" value="Web Development"> Web Development
                    </label><br>
                    <label class="checkbox-label">
                        <input type="checkbox" name="service" value="C# expert"> C# Expert
                    </label><br>
                    <label class="checkbox-label">
                        <input type="checkbox" name="service" value="Java expert"> Java Expert
                    </label>
                </div>
            </div><br>
            <div class="form-group">
                <label for="joboffering">Are you offering job? <br><small class="help-text">(Optional)</small></label>
                <div class="radio-option">
                    <label class="radio-label">
                        <input type="radio" name="option" value="yes"> Yes
                    </label><br>
                    <label class="radio-label">
                        <input type="radio" name="option" value="no"> No
                    </label>
                </div>
            </div><br>
            <div class="form-group">
                <label for="yourposition">Select Your Position:</label>
                <select name="Position" id="">
                    <option selected disabled>Select a Position</option>
                    <option value="ceo">CEO</option>
                    <option value="hr">HR</option>
                    <option value="employee">Employee</option>
                </select>
            </div>
            <div class="formBtn">
                <input id="submitBtn" type="submit" value="Send">
            </div>
        </form>
    </section>
    <hr>
    <footer>
        <div class="contain">
            <div class="contactInfo">
                Address: House-43/D, Road No-04, Block-D, Bashundhara R/A, Dhaka <br>
                Mobile: +8801601007474, +8801792582080 <br>
                Email: sushantovharati.sv@gmail.com <br>
            </div>
            <div class="socialLink">
                <a href="https://x.com/sv_sushanto?t=oGFEB2X29y_3HgELCauXYA&s=09"><img src="..\image/icon_x.png"
                        alt=""></a>
                <a href="https://www.linkedin.com/in/sushantovharati"><img src="..\image/icon_LN.png" alt=""></a>
                <a href="https://www.instagram.com/sushantovharati"><img src="..\image/icon_instagram.png" alt=""></a>
                <a href="https://www.facebook.com/share/16cgzH5Jop/"><img src="..\image/icon_fb.png" alt="FaceBook"></a>
            </div>
        </div>
        <div class="copyRight">
            <p>&copy; 2025 Sushanto Vharati. All rights reserved.</p>

        </div>
    </footer>
</body>

</html>