<?php
require_once 'dbconfic.php';

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Prepare the SQL query to fetch the username and hashed password
    $sql = "SELECT name, password  FROM user WHERE name = '$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"]; // Fetch the hashed password

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            //session_start(); // Start the session
            
           //$_SESSION["user_name"] = $row["username"];
            
            header("Location: ../book.php");
            exit; // Ensure no further code runs after redirection
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }

    $connect->close(); // Close the database connection
    //header("Location: ../login.php?error=" . urlencode($error));
   // exit;
}
?>
