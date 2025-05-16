<?php

session_start();

require 'db.php';

// Intentionally vulnerable to SQL injection
$username = $_POST['username'];
$password = $_POST['password'];

// Vulnerable query without proper escaping
$sql = "SELECT * FROM users WHERE name = '$username' AND password LIKE '%$password%'";
$result = $mysqli->query($sql);

if($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    $_SESSION['email'] = $user['email'];
    $_SESSION['UserName'] = $user['name'];
    $_SESSION['active'] = $user['active'];
    $_SESSION['account_type'] = $user['account_type'];
    $_SESSION['logged_in'] = 1;
    
    header("location: ../source/index.php");
} else {
    echo "<script>alert('Login failed! Invalid username or password.');</script>";
    echo "<script>window.location.href='../source/vulnerable_login.php';</script>";
}

?> 