<?php
include("config.php"); // Include the database connection from config.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform your login validation here (e.g., querying the database using $conn)
    
    // For example, you can use a SQL query like this (make sure to hash the password in your database):
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Login successful
            // Redirect the user or set session variables here
            header("Location: welcome.php"); // Replace with the appropriate welcome page
            exit();
        } else {
            // Invalid credentials
            echo "Invalid username or password.";
        }
    } else {
        // Error executing the query
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection when done
    mysqli_close($conn);
}
?>
