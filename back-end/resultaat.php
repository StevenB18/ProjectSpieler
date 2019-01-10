<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fcmborijnland";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$mysqli = new mysqli("$dbhost", "$dbuser", "$dbpass", "$dbname");
        
        if(mysqli_connect_errno())
        {
            die("Database connection failed: ".
            mysqli_connect_error() .
              " (" . mysqli_connect_errno() . ")"
          );
        }
        
        $query = "SELECT * FROM schoolbezoek";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Database query failed");
        }
        
        while ($obj = mysqli_fetch_object($result)) 
                {
            echo $obj->Docent; 
            echo ("<br>");
            echo $obj->Datum;
            echo ("<br>");
            echo $obj->Aantekening;
            echo ("<br><br>");
        }
        
        mysqli_free_result($result);
        
        mysqli_close($connection);
        
        echo " <tr> <td><a href='Aanpassen.php'>Hier pas je aan</a></td>"
      ?>
