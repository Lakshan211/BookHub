<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup Form</title>
    
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
            <h1>Sign Up</h1>
            <form action="backend/signup.php" method="POST" name="signup">
                <input type="text" name="name" placeholder="Username" required><br>
                <input type="email" name="email" placeholder="Email Address" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="password" name="confirm_password" placeholder="Re-Enter Password" required><br>
                <input type="submit" value="Create Account" id="button"><br><br>
            </form>
            Already have an Account?<br><br>
            <a href="login.php" id="button">Log In</a>
        </div>
    </div>

</body>

</html>