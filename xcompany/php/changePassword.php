<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password | X Company</title>
    <link rel="stylesheet" href="..\css/base.css">
    <link rel="stylesheet" href="..\css/nav.css">
    <link rel="stylesheet" href="..\css/footer.css">
    <link rel="stylesheet" href="..\css/changePassword.css">
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
                <label for="welcome">Logged In as </label>
                <a href="editProfile.php">Bob</a>
                <li class="nav-item"><a href="..\index.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-section display-flex">
        <div class="left-section">
            <h3 class="section-title">Account</h3>
            <div class="list">
                <ul class="list">
                    <li class="list-item"><a href="loggedInDashboard.php">Dashboard</a></li>
                    <li class="list-item"><a href="viewProfile.php">View profile</a></li>
                    <li class="list-item"><a href="editProfile.php">Edit profile</a></li>
                    <li class="list-item"><a href="changeProfilePicture">Change Profile Picture</a></li>
                    <li class="list-item"><a href="changePassword.php">Change Password</a></li>
                    <li class="list-item"><a href="..\index.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="right-section">
            <h1>CHANGE PASSWORD</h1>
        <form action="">
            <div class="form-group">
            <label for="currentPassword">Current Password:</label>
            <input type="text" name="password">
        </div>

        <div class="form-group">
            <label id="newPassword" for="newPassword">New Password: </label>
            <input type="text">
        </div>

        <div class="form-group">
            <label id="retypeNewPassword" for="retypeNewPassword">Retype New Password</label>
        </div>
        </form>
        <hr>

        <input type="submit" value="Submit">
        </div>
    </main>

    <footer class="footer-section">
        <p>Copyright &copy; 2017</p>
    </footer>
</body>
</html>