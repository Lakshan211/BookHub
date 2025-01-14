<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" href="css/signup.css"> 
</head>
<body>

    <div class="header-content">
        <h1 style="font-size: 80px; color: rgba(0, 0, 0, 0.911);">Welcome...</h1>
        <h1 style="font-size: 40px; color: rgba(0, 0, 0, 0.833);">
            <b><u>Book Exchange Platform</u></b>
        </h1>
    </div>

    <div class="container">
        <img src="assets/book6.png" height="70" width="70" alt="Profile Image">
        <div class="card">
            <h1>Login</h1>
            <form action="backend/login.php" method="POST">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <a href="#">Forgot password?</a><br><br>
                <input type="submit" value="Submit" id="button" name="login"><br><br>
            </form>

            Create New Account?<br><br>
            <a href="signup.php" id="button">Get Started</a>
        </div>
    </div>

</body>
</html>