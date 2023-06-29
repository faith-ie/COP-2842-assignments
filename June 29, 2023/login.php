<?php
session_start();

if (isset($_SESSION['username'])) {
  $loggedInUsername = $_SESSION['username'];
?>

  <?php include('./templates/header.php'); ?>

  <div class="content">
    <h1>Login</h1>
    <p>Error: You are already logged in as <?php echo $loggedInUsername; ?>.</p>
  </div>

  <?php include('./templates/footer.php'); ?>

<?php
} else {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
      echo "<p>Please fill in all the fields.</p>";
    } else {
      $_SESSION['username'] = $username;
      header("Location: main.php");
      exit();
    }
  }

  include('./templates/header.php');
?>

  <div class="content">
    <h1>Login</h1>
    <form method="POST" action="login.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </div>

  <?php include('./templates/footer.php'); ?>

<?php
}
?>
