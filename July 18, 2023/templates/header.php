<?php
session_start();
function is_logged_in() {
    return isset($_SESSION['username']);
}
if (!is_logged_in() && basename($_SERVER['PHP_SELF']) != 'login.php' && basename($_SERVER['PHP_SELF']) != 'access_denied.php'  && basename($_SERVER['PHP_SELF']) != 'register.php') {
    header("Location: ./access_denied.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <title>
    <?php echo isset($title) ? $title : "Daniel Viola"; ?>
  </title>
</head>
<body>
  <header>
    <div class="content">
      <h1>Daniel Viola</h1>
      <nav>
        <ul>
          <li><a href="main.php">Home</a></li>
          <?php
          if (!is_logged_in()) {
              echo '<li><a href="register.php">Register</a></li>';
              echo '<li><a href="login.php">Login</a></li>';
          } else {
              echo '<li><a href="logout.php">Logout</a></li>';
          }
          ?>
        </ul>
      </nav>
    </div>
  </header>
