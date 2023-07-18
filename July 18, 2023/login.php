<?php
ob_start();
include('./templates/header.php');
include('db_connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
      $_SESSION['username'] = $username;
      header("Location: main.php");
       exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }
}
ob_end_flush();

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

<?php
include('./templates/footer.php');
?>
