<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | X Company</title>
    <link rel="stylesheet" href="..\css/base.css">
    <link rel="stylesheet" href="..\css/nav.css">
    <link rel="stylesheet" href="..\css/footer.css">
    <link rel="stylesheet" href="..\css/login.css">
</head>

<body>
    <header class="header-section">
        <nav class="navbar">
            <div class="brand">
                <div class="brand-logo">
                    <img src="..\images/logo.ico" alt="brand logo">
                </div>
                <div class="brand-name">Company</div>
            </div>
            <ul class="nav-list">
                <li class="nav-item"><a href="..\index.php">Home</a></li>
                <li class="nav-item"><a href="login.php">Login</a></li>
                <li class="nav-item"><a href="registration.php">Registration</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-section">
        <h2>LOGIN</h2>
        <form action="">
            <div class="form-group">
                <label for="uname">User Name :</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password">
            </div>
            <hr>
            <label for="rememberme"><input type="checkbox">Remember Me</label><br>
            <input type="submit" name="submit" value="Submit">
            <a href="forgotPassword.php">Forgot Password?</a>
        </form>
    </main>

    <footer class="footer-section">
        <p>Copyright &copy; 2017</p>
    </footer>
</body>

</html>