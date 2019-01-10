<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fcmborijnland";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        if(mysqli_connect_errno())
        {
            die("Database connection failed: ".
            mysqli_connect_error() .
              " (" . mysqli_connect_errno() . ")"
          );
        }
        
       function test_input($data) { 
           $data = trim($data); 
           $data = stripslashes($data); 
           $data = htmlspecialchars($data); 
           return $data; }
             
        
        
        if ($_SERVER["REQUEST_METHOD"]== 'POST'){


               $Docent = test_input($_POST['Docent']) ;
               $Datum = test_input($_POST['Datum']);
               $Aantekeningen = test_input($_POST['Aantekeningen']) ;
               $query = "INSERT INTO schoolbezoek (id, Docent, Datum, Aantekening) VALUES (NULL, '$Docent', '$Datum', '$Aantekeningen');";
               Echo "succesfully inputed the stuff returning to the index soon" ;

               mysqli_query($connection, $query);
               header('Refresh: 3; url=verschijning.php');
        }
        
        ?>