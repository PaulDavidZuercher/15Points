<?php 
    session_start();
    include 'sqlConnect.php';
    
    if(!$_SESSION["login"])
    {
        die("<html> <head> <title> Error 1234 </title> </head><body> <h1> Please Login first </h1> </body> </html>");
    }
    
    $cre_date = new DateTime('now', new DateTimeZone('Europe/London'));
    $SetorGet = $_POST["SetOrGet"];
    if($_POST["userName"] != $_SESSION["userName"])
    {
        die("Try Not to Hack me m8 :) you are not {$_POST["userName"]} :)");
    }
    
    switch($SetorGet) // Two way use: 1 as setting data 2 as getting data
	{
		case 1:
           		$userName = $mysqli->real_escape_string($_POST["userName"]);
			$foreignServiceName = $mysqli->real_escape_string($_POST["foreignServiceName"]);
			$foreignServiceUserName = $mysqli->real_escape_string($_POST["foreignServiceUserName"]);
			$foreignServicePassWord = $mysqli->real_escape_string($_POST["foreignServicePassWord"]);
			$stmt = $mysqli->query("INSERT INTO savedLoginData (userName, foreignServiceName, foreignServiceUserName, foreignServicePassWord) VALUES ('$userName', '$foreignServiceName', '$foreignServiceUserName', '$foreignServicePassWord');");
			if(!$stmt->execute())
			{
				die("Insertion of Data failed:". $mysqli->error);
			}
			break;

		case 2:
			$res = $mysqli->query("SELECT * FROM savedLoginData WHERE userName = {$_POST["userName"]} ");	

			echo("</table>");
			echo("<tr> <th>Website</th> <th> Username </th> <th> Password </th> <th> Data Created</th> </tr>"); 

			while($row = $res->mysqli_fetch_array())
    			{
				echo ("<tr>");
				echo ("<td>" . $row["foreignServiceName"] . "</td>");
				echo ("<td>" . $row["foreignServiceUserName"] . "</td>");
				echo ("<td>" . $row["foreignServicePassWord"]  . "</td>");
				echo ("<td>" . $row["creationTimeStamp"] . "</td>");
				echo ("</tr>"); 
			}
            
			echo("</table>"); 
			break;        
	}

?>
