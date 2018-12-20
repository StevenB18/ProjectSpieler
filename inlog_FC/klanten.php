
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<titel> </titel>

<link rel="stylesheet" type="text/css" href="landscape.css">
<link rel="stylesheet"  media="(max-width: 690px) and (orientation: portrait)" href="mobile.css">


 <?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "frizisto";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_error()){
die("Database Connection Failed: " . mysqli_error() . "(". mysqli_connect_errno() . ")"
);
}
$query = "SELECT * FROM notities";
$result = mysqli_query($connection, $query);
if (!$result){
die("Database query failed");
}
while ($obj = mysqli_fetch_object($result)) 
                {
            echo $obj->docentmaan; 
            echo ("<br>");
            echo $obj->datum;
            echo ("<br>");
            echo $obj->;
            echo ("<br><br>");
        }
$weekactie = mysqli_fetch_array($result);
?>
    
 
     

</body>
</div>
</div>
</html>