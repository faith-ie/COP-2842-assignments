<?php
include ('./templates/header.php');
?>
<h1>Report an Issue</h1>
<?php
$dbHost = '3631160a909f';
$dbName = 'tracking_system';
$dbUser = 'root';
$port = 3306;
$dbPass = 'root';
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName, $port);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
  $requestType = htmlspecialchars($_POST['type']);
  $datetime = htmlspecialchars($_POST['datetime']);
  $name = htmlspecialchars($_POST['name']);
  $description = htmlspecialchars($_POST['Description']);
  $description = substr($description, 0, 900);
  $name = substr($name, 0, 100);
  $requestType = substr($requestType, 0, 50);
  $sql = "INSERT INTO issues (requestType, fullName, description, creationDate) VALUES ('$requestType', '$name', '$description', NOW())";

  if ($conn->query($sql) === TRUE) {
    echo "<div style='color:green;'>Thank you, $name! Your request has been submitted.
    <br>Summary of Request: $requestType
    <br>Date and Time: $datetime
    <br>Description: $description</div>";
    $_POST = array();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
<form method="post" action="report.php">
    <p>Request type: <select name="type" required>
        <option value="Bug fix">Bug fix</option>
        <option value="New Feature">New Feature</option>
        <option value="Other">Other</option>
      </select>
    </p>
    <p>Date and Time: <input type="datetime-local" name="datetime" size="20" required></p>
    <p>Full name:
      <input type="text" size="100" name="name" required></p>
    <p>Description: <textarea name="Description" rows="3" cols="30" required></textarea></p>
    <input type="submit" name="submit">
  </form>
<?php
include('./templates/footer.php');
?>