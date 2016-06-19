$mysqli = new mysqli("localhost", "root", "rabadons0p", "PSWdatabase");

if($mysqli->connect_errno)
{
  echo ("MySql Connection: " . $mysqli->connect_error);
}
