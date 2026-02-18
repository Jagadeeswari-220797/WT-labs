<?php
include "db.php";

if (isset($_POST['register'])) {

    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    // clean inputs
    $username=htmlspecialchars($username);
    $email=htmlspecialchars($email);
    $username=strtolower($username);
    if(strlen($username)<5){
        die("Username must be atleast 5 characters");
    }
    if(strlen($password)<6){
        die("password must be at least 6 characters");
    }
    $username=addslashes($username);
    $email=addslashes($email);
    $password=addslashes($password);

    $sql = "INSERT INTO userdetails (username,email, password)
            VALUES ('$username','$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<p style='color:green'>Registration successful</p>";
    } else {
        echo "<p style='color:red'>Registration failed</p>";
    }
}
?>