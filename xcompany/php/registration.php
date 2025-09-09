<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | xCompany</title>
    <link rel="stylesheet" href="..\css/base.css">
    <link rel="stylesheet" href="..\css/nav.css">
    <link rel="stylesheet" href="..\css/footer.css">
    <link rel="stylesheet" href="..\css/registration.css">
</head>

<body>
    <?php

    $nameErr = $emailErr = $unameErr = $passwordErr = $confirmPasswordErr = $genderErr = $dobErr = "";
    $name = $email = $uname = $password = $confirmPassword = $gender = $dob = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["uname"])) {
            $unameErr = "Name is required";
        } else {
            $uname = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $uname)) {
                $unameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Name is required";
        }

        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordErr = "Name is required";
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <header class="header-section">
        <nav class="navbar">
            <div class="brand">
                <div class="brand-logo">
                    <img src="..\images/logo.ico" alt="">
                </div>
                <div class="brand-name">Company</div>
            </div>
            <ul class="nav-list display-flex">
                <li class="nav-item"><a href="..\index.php">Home</a></li>
                <li class="nav-item"><a href="login.php">Login</a></li>
                <li class="nav-item"><a href="registration.php">Registration</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-section">
        <h2>Registration</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>">
                <span class="error"><?php echo $nameErr; ?></span>
                <br><br>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr; ?></span>
                <br><br>
            </div>

            <div class="form-group">
                <label for="uname">User Name</label>
                <input type="text" name="uname" value="<?php echo $uname; ?>">
                <span class="error"><?php echo $unameErr; ?></span>
                <br><br>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" value="<?php echo $password; ?>">
                <span class="error"><?php echo $passwordErr; ?></span>
                <br><br>
            </div>

            <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="text" name="confirmPassword" value="<?php echo $confirmPassword; ?>">
                <span class="error"><?php echo $confirmPasswordErr; ?></span>
                <br><br>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
                <span class="error"><?php echo $genderErr; ?></span>
                <br><br>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="text"> / <input type="text"> / <input type="text">
                <small>(dd/mm/yyyy)</small>
            </div>



            <input type="submit" name="submit" value="Submit">
            <button class="reset-btn">Reset</button>
        </form>
    </main>

<footer class="footer-section">
  <p>Copyright &copy; 2017</p>
</footer>
</body>

</html>