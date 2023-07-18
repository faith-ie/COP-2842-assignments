<?php
$hostname = '3631160a909f';
$username = 'root';
$password = 'root';
$database = 'myproject';
$port = 3306;
$conn = mysqli_connect($hostname, $username, $password, $database, $port);
if (!$conn) {
  die('Database connection failed: ' . mysqli_connect_error());
}