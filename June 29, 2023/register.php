<?php
ob_start();
session_start();
include('./templates/header.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($name) || empty($email) || empty($password)) {
    echo "<p>Please fill in all the fields.</p>";
  } else {
    echo "<p>Registration successful!</p>";
    $_SESSION['username'] = $name;
    header("Location: main.php");
    exit();
  }
}
ob_end_flush();
?>

<div class="content">
  <h1>Register</h1>
  <form method="POST" action="register.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Register</button>
  </form>
</div>

<?php include('./templates/footer.php'); ?>
