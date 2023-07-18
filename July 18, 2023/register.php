<?php
ob_start();
include('./templates/header.php');
include('db_connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $password = sha1($_POST['password']);
  if (empty($first_name) || empty($last_name) || empty($username) || empty($password)) {
    echo "<p>Please fill in all the fields.</p>";
  } else {
    $sql = "INSERT INTO user (first_name, last_name, username, password)
            VALUES ('$first_name', '$last_name', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<p>Registration successful!</p>";
      $_SESSION['username'] = $username;
      header("Location: main.php");
      exit();
    } else {
      echo "<p>Error: Registration failed.</p>";
    }
  }
}
ob_end_flush();
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>
    <form action="register.php" method="post">
        <label>First Name:</label>
        <input type="text" name="first_name" value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : ''; ?>" required><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : ''; ?>" required><br>

        <label>Username:</label>
        <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>