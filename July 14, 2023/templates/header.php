<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <head>
    <title>
      <?php
            if(!isset($title)) {
                $title = "Report";
                echo $title;
            }
            else {
                echo $title;
            }
            ?>
    </title>
    <link rel="stylesheet" href="../css/masthead.css">
    <div class="menu">
        <ul>
          <li><a href="./home.php"> Home </a></li>
          <li><a href="./report.php"> Report </a></li>
          <li><a href="./register.php"> Register </a></li>
          <li><a href="./about.php"> About </a></li>
          <li><a href="./login.php"> Login </a></li>
        </ul>
      </div>
  </head>