<?php
 $dbHost = '3631160a909f';
 $dbName = 'tracking_system';
 $dbUser = 'root';
 $port = 3306;
 $dbPass = 'root';
 $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName, $port);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password) && !empty($cPassword)) {
        $firstName = substr($firstName, 0, 50);
        $lastName = substr($lastName, 0, 50);
        $email = substr($email, 0, 100);
        $password = substr($password, 0, 30);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            header("Location: home.php");
            exit();
        } else {
            echo "Error executing the SQL query: " . $stmt->error;
        }
    } else {
                echo "All fields are required.";
    }
}
?>

<section>
    <?php include './templates/header.php';
    ?>
    <h1>Registration</h1>
    <form method="post" action="register.php">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" maxlength="50" required><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" maxlength="50" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" maxlength="100" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" maxlength="30" required><br>
        
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" maxlength="30" required><br>

        <input type="submit" value="Register">
    </form>
</section>

<?php include './templates/footer.php'; ?>