<!doctype html>
<html lang="en-us">

  <head>
    <meta charset="UTF-8">
    <title>Summary</title>
  </head>

  <body>
    <?php
    $t = $_POST['type'];
    $dt = $_POST['datetime'];
    $n = $_POST['name'];
    $d = $_POST['Description'];
    print "<h2> Thank you $n:</h2>\n<p style=\"font-size:120%\">Your request has been submitted.</p>\n\n<p>Summary of request:</p>\n<p>Type: $t</p>\n<p>Date and Time: $dt</p>\n<p>Description: $d</p>";
   include "footer.php";
?>