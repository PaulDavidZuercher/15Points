<?php $mysqli = new mysqli("localhost", "root", "rabadons0p", "15PointsDB");

if($mysqli->connect_errno)
{
  die("MySql Connection: " . $mysqli->connect_error);

}
?>
