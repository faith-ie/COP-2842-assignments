<?php
        include("header.php");
        ?>

<body>
  <form action="summary.php" method="post">
    <p>Request type <select name="type" required>
        <option value="Bug fix">Bug fix</option>
        <option value="New Feature">New Feature</option>
        <option value="Other">Other</option>
      </select>
    </p>
    <p>Date and Time: <input type="datetime-local" name="datetime" size="20" required></p>
    <p>Full name:
      <input type="text" size="20" name="name" required>
    <p>Description: <textarea name="Description" rows="3" cols="30" required></textarea></p>
    <input type="submit" name="submit" value="Submit">
  </form>
  </div>
  <?php
    include("footer.php");
    ?>