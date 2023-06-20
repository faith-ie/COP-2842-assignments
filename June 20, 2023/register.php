<!DOCTYPE html>
<head>
    <title>Register</title>
</head>
<body>
<p><a href="home.php">Home</a> <a href="report.php">Report</a> <a href="register.php">Register</a> <a href="about.php">About</a> <a href="login.php">Login</a></p>
<h1> Register to MDC Issue Tracking System</h1>
<form>
    <p>First Name:<input type="text" size="12" name="fName" required></p>
    <p>Last Name:<input type="text" size="12" name="lName" required></p>
    <p>Email Address:<input type="email" size="32" name="email" required></p>
    <p>Password:<input type="text" size="12" name="password" required></p>
    <p>Confirm Password:<input type="text" size="12" name="cPassword" required></p>
    <input type="submit" name="register" value="Register">
</form>
<?php
include('templates/footer.php');
?>