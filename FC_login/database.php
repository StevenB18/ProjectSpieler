<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "inspecteur";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass ,$dbname);
$mysqli = new mysqli("$dbhost", "$dbuser", "$dbpass", "$dbname");
if(mysqli_connect_errno ()) {
    die ("Database connection failed: " .
    mysqli_connect_errno() .
      " (" . mysqli_connect_errno(). ")"
            );
}

$query ="SHOW TABLES";
$result = mysqli_query($connection, $query);

if( !$result) {
    die("database query failed");
}

while($row = mysqli_fetch_object($result)){
    echo $row->username;
  
}
mysqli_free_result($result);

mysqli_close($connection);

?>

