<?php
$con = mysqli_connect("localhost", "root", "", "inspecteur");
$sql="SELECT * FROM notities WHERE id=". $_GET['id'];

$result = mysqli_query($con, $sql);

   $row = mysqli_fetch_array($result);
echo"<tr><td> <a href='edit.php?id=" .$row["0"] . "'>"."Pas deze aantekening aan"."</a></td>"
    ."<td><input type='text'name='docent'value'".$row[1]."'></td>"
     ."<td><input type='text'name='aantekening'value'".$row[2]."'></td>"
       ."<td><input type='date'name='datum'value'".$row[3]."'></td>"
      . "<td> <input type='submit' value='edit message' />"."</td> </tr>"
      
. "<tr> <td> <a href='gegevens_invoegen.php'> Terug naar gegevens invoegen</a><td>"
        . "<tr> <td> <a href='overzicht.php'> Terug naar het overzicht</a><td>"
        . "<tr> <td> <a href='uitloggen.php'></a><td></tr></form>"

    ."</table>"
;


?>