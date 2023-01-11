<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm-password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    $sql = "SELECT * FROM users WHERE user_name='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already in use";
    }
    else {
        if ($password == $confirmPassword) {
            $sql = "INSERT INTO users (user_name, password) VALUES ('$username', '$password')";
            if (mysqli_query($conn, $sql)) {
                echo "User added successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } 
        else {
        echo "Passwords do not match";
        }
    }
}