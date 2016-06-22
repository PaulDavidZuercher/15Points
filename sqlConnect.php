$mysqli = new mysqli("localhost", "paul", "rabadons0p", "15PointsDB");

if($mysqli->connect_error)
{
  echo ("MySql Connection: " . $mysqli->connect_error);
}
