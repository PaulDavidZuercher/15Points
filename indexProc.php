<?php 
    include 'sqlConnect.php';
    
    if(!$SESSION["login"])
    {
        die("<html> <head> <title> Error 1234 </title> </head><body> <h1> Please Login first </h1> </body> </html>");
    }
    
    $cre_date = new DateTime('now', new DateTimeZone('EUROPE'));
    $SetorGet = $_POST["SetorGet"];
    /*if($_POST["userName"] == )
    {
        die("Try Not to Hack me m8 :)");
    }*/
    
    switch($SetorGet)
	{
		case 1:
            
			$stmt = $mysqli->prepare("INSERT INTO savedLoginData (userName, loginDataName, passWord, cre_date) VALUES ('?', '?', '?', '?')");
			$stmt->bind_param("ssss",$_SESSION["userName"], $_POST["loginDataName"], $_POST["passWord"], $cre_date);
			if(!$stmt->execute())
			{
				die("Insertion of Data failed:". $mysqli->error);
			}
			break;

		case 2:
			$stmt = $mysqli->prepare("Select * where userName = ?");
         		$stmt->bind("?", $_SESSION["userName"]); 
			$stmt->execute();

			echo("</table>");
			echo("<tr> <th>Website</th> <th> Username </th> <th> Password </th> <th> Data Created</th>"); 

			while($row = $res->fetch_row())
    			{
				echo ("<tr>");
				echo ("<td>" . $row["loginDataName"] . "</td>");
				echo ("<td>" . $row["userName"] . "</td>");
				echo ("<td>" . $row["passWord"]  . "</td>");
				echo ("<td>" . $row["cre_date"] . "</td>");
				echo ("</tr>"); 
			}
            
			echo("</table>"); 
			$mysqli->prepare("SELECT * FROM savedLoginData SLD, user U WHERE U.userName = SLD.userName AND U.userName = ?");
			$mysqli->bind_param("s", $_POST["userName"])
			$res = $stmt->execute();
			break;        
	}

?>
