<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | X Company</title>
    <link rel="stylesheet" href="..\css/base.css">
    <link rel="stylesheet" href="..\css/nav.css">
    <link rel="stylesheet" href="..\css/footer.css">
    <link rel="stylesheet" href="..\css/forgotPassword.css">
</head>
<body>
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
        <h1>FORGOT PASSWORD</h1>
        <form action="">
            <div class="form-group">
                <label for="email">Enter Email:</label>
                <input type="text" name="email" >
            </div>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>
    </main>

    <footer class="footer-section">
        <p>Copyright &copy; 2017</p>
    </footer>
</body>
</html>