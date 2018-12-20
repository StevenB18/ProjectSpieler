<?php
   session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "inspecteur";
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
    
    

    $docentnaam = trim($_POST["naamflat"]);
        $adres = trim($_POST ["adres"]);
         $aantekeningen = trim($_POST ["aantekeningen"]);
        $brandweerman = trim($_POST ["brandweerman"]);
        
     
    $sql="INSERT INTO notities (id, docentnaam,aantekeningen, adres, brandweerman) VALUES (NULL, '$docentnaam', '$aantekeningen','$adres','$brandweerman')";


    mysqli_query($connection, $sql);
    header('refresh:5; url=gegevens_invoegen.php');
   } 
    
    
      
$query = "SELECT * FROM notities";
$result = mysqli_query($connection, $query);
if (!$result){
die("Database query failed");
}





?>