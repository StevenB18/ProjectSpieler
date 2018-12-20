<?php
session_start();

$sGebruikerControle ="admin";
$sWachtwoordControle ="voorbeeld";

if($_SERVER["REQUEST_METHOD"] == "POST")
{ 
    if(isset($_POST["user"], $_POST["pass"]))
    {
    function test_input($data) { 
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data; } $name = test_input($_POST["user"]);
    
    $sGebruiker =($_POST["user"]);
    $sWachtwoord =($_POST ["pass"]);
    
    //wachtwoord overschijven met md5

    
    $con = mysqli_connect("localhost", "root", "", "inspecteur");
    
$sql="SELECT gebruikersnaam, wachtwoord FROM inlog WHERE gebruikersnaam = '".$sGebruiker."' AND wachtwoord = '". $sWachtwoord."'"; 

   
    
    
    if( $result=mysqli_query($con, $sql)) {
    

    $aantal = mysqli_num_rows($result);
    $result = mysqli_free_result($result);
    }
    if($aantal==1)
    {
      $_SESSION ["logged_in"] = true;
      $_SESSION["gebruiker"] = $sGebruiker;
      
      header("Refresh: 3; url=gegevens_invoegen.php");
      echo"Je bent succesvol ingelogd. Je word doorgestuurd.";
    }
    
 else {
       header("Refresh: 3; url=form.php");
       echo"Deze combinatie van gebruikersnaam en wachtwoord is niet juist!";
    }
}
else
{
    header("Refresh: 3; url=loginform2.php");
    echo"Een vereist veld bestaat niet!";
}
}

else {
    header("Location: uitloggen.php");
    exit();
}
 ?>
