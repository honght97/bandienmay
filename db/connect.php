<?php
$mysqli = new mysqli("localhost","root","","bandienmay");
$mysqli -> set_charset("utf8");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
mysqli_report(MYSQLI_REPORT_STRICT);
?>