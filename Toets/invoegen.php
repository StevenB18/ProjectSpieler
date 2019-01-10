<?php
   session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fcmborijnland";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass ,$dbname);
if(mysqli_connect_errno ()) {
    die ("Database connection failed: " .
    mysqli_connect_errno() .
      " (" . mysqli_connect_errno(). ")"
            );
}

if ($_SESSION ["logged_in"] == false) { 
    header('url=form.php');
}
if($_SERVER['REQUEST_METHOD']=='POST'){ 
    
    

    $voornaam = trim($_POST["voornaam"]);
        $tussenvoegsel = trim($_POST ["tussenvoegsel"]);
         $achternaam = trim($_POST ["achternaam"]);
        $selectieid = trim($_POST ["selectieid"]);
    $teamid = trim($_POST ["teamid"]);
        
     
    $sql="INSERT INTO notities (spelerid, voornaam,tussenvoegsel, achternaam, selectieid, teamid) VALUES (NULL, '$voornaam', '$tussenvoegsel','$achternaam','$selectieid','$teamid')";


    mysqli_query($connection, $sql);
    header('refresh:5; url=gegevens_invoegen.php');
   } 
    
    
      
$query = "SELECT * FROM spelers";
$result = mysqli_query($connection, $query);
if (!$result){
die("Database query failed");
}





?>