<?php
  $con = mysqli_connect("localhost", "root", "", "fcmborijnland");

  
$sql="SELECT * FROM spelers";

$result = mysqli_query($con, $sql);

echo"<table>"



. "<th> voornaam:</th>"
. "<th> tussenvoegsel:</th>"
. "<th> achternaam:</th>"
. "<th> selectieid:</th>"
. "<th> teamid:</th>"

;



while ($row = mysqli_fetch_array($result)) {
   
    echo"<tr><td> <a href='edit.php?id=" .$row["0"] . "'>"."Pas deze aantekening aan"."</a></td>"
    ."<td>". $row["1"]. "</td>"
    ."<td>". $row["2"]. "</td>"
    ."<td>". $row["3"]. "</td>"
        ."<td>". $row["4"]. "</td>"
    ."<td>"
            ;
}
    
    
   echo "<tr> <td> <a href='gegevens_invoegen.php'>Terug naar invoegen van gegevens</a> </td>
       <td><a href='uitloggen.php'>Log uit.</a></td></tr> </table>";

mysqli_free_result($result);
mysqli_close($con);


?>
