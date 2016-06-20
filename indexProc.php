<?php 
    include 'sqlConnect.php';
    
    if(!$SESSION["login"])
    {
        die("<html> <head> <title> Error 1234 </title> </head><body> <h1> Please Login first </h1> </body> </html>");
    }
    
    $dataCreation = new DateTime('now', new DateTimeZone('EUROPE'));
    $SetorGet = $_POST["SetorGet"]
    if($_POST["userName"] == )
    {
        die("Try Not to Hack me m8 :)");
    }
    
    switch($SetorGet)
    {
        case: 1
            
            $mysqli->prepare("INSERT INTO savedLoginData (userName, loginDataName, passWord, dataCreation) VALUES ('?', '?', '?', '?')");
            $mysqli->bind_param("ssss",$_SESSION["userName"], $_POST["loginDataName"], $_POST["passWord"], $dataCreation);
            break;
        case: 2
            
            break;        
            
            $res = $mysqli->prepare("Select * where userName = ?");
            
            while($row = $res->fetch_row())
            {
                
            }
            
            
            /*
            $mysqli->prepare("SELECT * FROM savedLoginData SLD, user U WHERE U.userName = SLD.userName AND U.userName = ?");
		$mysqli->bind_param("s", $_POST["userName"])
		$res = mysqli_query($mysqli); 		
		
		echo "<table>";
		while($row = mysqli_fetch_object($res))
			{
			echo "<tr>";
			echo "<td>",$row->,"</td>";
			echo "<td>",$row->urlname,"</td>";
			echo "</tr>";
		}
		echo "</table>";
            */
    }
    
?>
