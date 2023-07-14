<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($email) && !empty($password)) {
        $dbHost = '3631160a909f';
        $dbName = 'tracking_system';
        $dbUser = 'root';
        $port = 3306;
        $dbPass = 'root';
        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName, $port);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            $hashedPassword = $user['password'];
            $password = substr($password, 0, 30);
            if ($password === $hashedPassword) {
                header("Location: home.php");
                exit;
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Invalid email or password.";
        }
        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required.";
    }
}
?>

<section>
    <?php include('./templates/header.php'); ?>
    <h1>Login</h1>
    <form method="post" action="login.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" maxlength="100" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" maxlength="30" required><br>

        <input type="submit" value="Login">
    </form>
</section>

<?php include('./templates/footer.php') ?>
