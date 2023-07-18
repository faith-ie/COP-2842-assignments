<?php
include('db_connection.php');
$sql = "SELECT * FROM skills";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    echo '<div class="content">';
    echo '<h1>Skills</h1>';
    echo '<table>';
    echo '<tr><th>Skill</th><th>Description</th>';
    while ($row = $result->fetch_assoc()) {
        $skill = $row['skill_name'];
        $description = $row['description'];
        echo "<tr><td>$skill</td><td>$description</td>";
    }
    echo '</table>';
    echo '<img src="skills.webp" alt="skills" width="250" height="250">';
    echo '</div>';
} else {
    echo "No skill records found.";
}

$conn->close();
include('./templates/footer.php');
?>