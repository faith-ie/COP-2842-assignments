<!DOCTYPE html>
<html lang="en-us">

  <head>
    <title>
      <?php
            if(!isset($title)) {
                $title = "Report";
                echo $title;
            }
            else {
                echo $title;
            }
            ?>
    </title>
  </head>