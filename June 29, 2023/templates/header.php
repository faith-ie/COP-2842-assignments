<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <title>
    <?php
    if (!isset($title)) {
      $title = "Daniel Viola";
    }
    echo $title;
    ?>
  </title>
</head>

<body>
  <header>
    <div class="content">
      <h1>Daniel Viola</h1>
      <nav>
        <ul>
          <li><a href="main.php">Home</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>
