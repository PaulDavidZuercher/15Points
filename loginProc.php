<?php
  session_start();
  include 'sqlConnect.php';
  
  //checkt username mit pw in mysql datenbank existieren --> öffenet index oder gibt fehlercode aus
  if(!empty($_POST))
  {
    $userName = $_POST["userName"];
    $passWord = $_POST["passWord"];
    //if($res = $mysqli->query("Select * from user where userName = '$userName' && passWord = '$passWord'"))
    //{
    // 	echo ("Selected Rows: " . $res->num_rows );
    //}
    if($stmt =$mysqli->prepare("Select * from user where userName = '?' && passWord = '?'")){
      $res = $stmt->get_result();
      echo("test: " . $res);
      if($res->num_rows > 0)
        {
        //user exists 
         $_SESSION["login"] = true;
         $_SESSION["userName"] = $_POST["userName"]; //todo find more safe version :)
        
         echo("<script type=\"text/javascript\"> window.location = \"/index.php\"; </script>" );
         exit();
      }
      else{
        die ("failed to prepare statement");

      }
    
      echo("<p> invalid Username/Password Combination </p>");
    }
  }
?>
