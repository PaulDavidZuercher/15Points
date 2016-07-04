<?php 
    session_start();
    include 'sqlConnect.php';
    
    if(!$_SESSION["login"])
    {
        die("<html> <head> <title> Error 1234 </title> </head><body> <h1> Please Login first </h1> </body> </html>");
    }
    
    $cre_date = new DateTime('now', new DateTimeZone('Europe/London'));
    $SetorGet = $_POST["SetOrGet"];
    
    switch($SetorGet) // Two way use: 1 as setting data 2 as getting data
	{
		case 1:
           		$userName = $mysqli->real_escape_string($_SESSION["userName"]);
			$foreignServiceName = $mysqli->real_escape_string($_POST["foreignServiceName"]);
			$foreignServiceUserName = $mysqli->real_escape_string($_POST["foreignServiceUserName"]);
			$foreignServicePassWord = $mysqli->real_escape_string($_POST["foreignServicePassWord"]);
			$res = $mysqli->query("INSERT INTO savedLoginData (userName, foreignServiceName, foreignServiceUserName, foreignServicePassWord) VALUES ('$userName', '$foreignServiceName', '$foreignServiceUserName', '$foreignServicePassWord');");
			if(!$res)
				die("Insertion of Data failed:". $mysqli->error);
			
			break;

		case 2:
           		$userName = $mysqli->real_escape_string($_SESSION["userName"]);
			$res = $mysqli->query("SELECT * FROM savedLoginData WHERE userName = '$userName'");					

			echo("<table>");
			echo("<tr> <th>Website</th> <th> Username </th> <th> Password </th> <th> Data Created</th> </tr>"); 

			while($row = $res->fetch_array())
    			{
				echo ("<tr>");
				echo ("<td>" . $row["foreignServiceName"] . "</td>");
				echo ("<td>" . $row["foreignServiceUserName"] . "</td>");
				echo ("<td>" . $row["foreignServicePassWord"]  . "</td>");
				
				$daysdiff = floor(abs(strtotime($row["creationTimeStamp"]) - strtotime(date("Y-m-d H:i:s")))/60/60/24);
				if($daysdiff > 365)
					echo("<script>alert(\"Das Passwort für {$row["foreignServiceName"]} ist älter als ein jahr); \")</script>");
				echo ("<td>" . $daysdiff. "Tage alt" . "</td>");
				echo ("</tr>"); 
			}
            
			echo("</table>"); 
			break;        
	}

?>
