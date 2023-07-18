<?php
include('db_connection.php');
$sql = "SELECT * FROM education";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<div class="content">';
    echo '<h1>Education</h1>';
    echo '<table>';
    echo '<tr><th>School</th><th>Start Year</th><th>End Year</th><th>Degree</th></tr>';
    while ($row = $result->fetch_assoc()) {
        $school = $row['school_name'];
        $year_start = $row['start_date'];
        $year_end = $row['end_date'];
        $degree = $row['degree'];
        echo "<tr><td>$school</td><td>$year_start</td><td>$year_end</td><td>$degree</td></tr>";
    }
    echo '</table>';
    echo '<img src="education.webp" alt="education" width="250" height="250">';
    echo '</div>';
} else {
    echo "No education records found.";
}

$conn->close();
include('./templates/footer.php');
?>
