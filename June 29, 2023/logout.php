<?php
session_start();
include('./templates/header.php');

if (isset($_SESSION['username'])) {
  $_SESSION['username'] = null;

  session_destroy();
?>

  <div class="content">
    <h1>Logout</h1>
    <p>You are now logged out.</p>
  </div>

<?php
} else {
?>

  <div class="content">
    <h1>Logout</h1>
    <p>Error: You are not logged in.</p>
  </div>

<?php
}

include('./templates/footer.php');
?>
