<?php
include('./templates/header.php');
?>
  <div class="content">
    <?php
    if (isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
      echo "<h2>Welcome, $username!</h2>";
    }
    ?>
    <div class="tab">
      <link rel="stylesheet" href="./css/styles.css">
      <script src="index.js"></script>
      <button class="tablinks" onclick="openPage(event, 'Personal Information')">Personal Information</button>
      <button class="tablinks" onclick="openPage(event, 'Education')">Education</button>
      <button class="tablinks" onclick="openPage(event, 'Awards')">Awards</button>
      <button class="tablinks" onclick="openPage(event, 'Skills')">Skills</button>
      <button class="tablinks" onclick="openPage(event, 'Interests')">Interests</button>
      <button class="tablinks" onclick="openPage(event, 'Work Experience')">Work Experience</button>
    </div>

    <div id="Personal Information" class="tabcontent">
      <?php
      include("personalinfo.php");
      ?>
    </div>

    <div id="Education" class="tabcontent">
      <?php
      include("education.php");
      ?>
    </div>

    <div id="Awards" class="tabcontent">
      <?php
      include("awards.php");
      ?>
    </div>

    <div id="Skills" class="tabcontent">
      <?php
      include("skills.php");
      ?>
    </div>

    <div id="Interests" class="tabcontent">
      <?php
      include("interests.php");
      ?>
    </div>

    <div id="Work Experience" class="tabcontent">
      <?php
      include("workexp.php");
      ?>
    </div>
  </div>

<?php
include("./templates/footer.php");
?>
