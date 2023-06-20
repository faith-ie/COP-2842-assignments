<head>
  <title>Report</title>
  <link rel="stylesheet" type="text/css" href="css/masthead.css" />
  <script src="index.js"></script>
</head>
<body>
<p><a href="home.php">Home</a> <a href="report.php">Report</a> <a href="register.php">Register</a> <a href="about.php">About</a> <a href="login.php">Login</a></p>
  <h1>Report an Issue</h1>
  <div id="paragraph">
    <?php
     $t = $_POST['type'];
     $dt = $_POST['datetime'];
     $n = $_POST['name'];
     $d = $_POST['Description'];
     print "<h2 style=\"color:green;\"> Thank you $n:</h2>\n<p style=\"font-size:120%; color:green;\">Your request has been submitted.</p>\n\n<p style=\"color:green;\">Summary of request:</p>\n<p style=\"color:green;\">Type: $t</p>\n<p style=\"color:green;\">Date and Time: $dt</p>\n<p style=\"color:green;\">Description: $d</p>";
    ?>
    </div>
  <form method="post" form action="report.php">
    <p>Request type: <select name="type" required>
        <option value="Bug fix">Bug fix</option>
        <option value="New Feature">New Feature</option>
        <option value="Other">Other</option>
      </select>
    </p>
    <p>Date and Time: <input type="datetime-local" name="datetime" size="20" required></p>
    <p>Full name:
      <input type="text" size="20" name="name" required></p>
    <p>Description: <textarea name="Description" rows="3" cols="30" required></textarea></p>
    <input type="submit" name="submit" onclick="return amongUs();">
  </form>
  <?php
    include("./templates/footer.php");
    ?>