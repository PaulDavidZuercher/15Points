<?php 
    include 'sqlConnect.php';
    
    $userName = $_POST["userName"];
    $loginDataName = $_POST["loginDataName"];
    $passWord = $_POST["passWord"];
    $dataCreation = new DateTime('now', new DateTimeZone('EUROPE'));

    $mysqli->query("INSERT INTO savedLoginData (userName, loginDataName, passWord, dataCreation) VALUES ('$userName', '$loginDataName', '$passWord', '$dataCreation')") 
?>
