<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile Picture | X Company</title>
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
    
    <main class="main-section">
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
            <h2>PROFILE PICTURE</h2>
            <img src="..\images/logo.png" alt="Profile Picture">
            <button class="chooseFile-btn">Choose File</button>
            <label for="">No file chosen</label>
            <hr>
            <input type="submit">
        </div>
    </main>

    <footer class="footer-section">
        <p>Copyright &copy; 2017</p>
    </footer>
</body>

</html>