<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "
http://www.w3.org/TR/xhtml?DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <titel> </titel>   
 </head>
   <?php
   session_start();
   
   if(!isset($_SESSION ['logged_in'])){
       $_SESSION['logged_in'] = false;
   }
     
if ($_SESSION ["logged_in"] == false) { 
    header('refresh:3; url=form.php');
    die('U bent niet ingelogt log in');
    
}
   ?>
    <body>
        <h1>Aanpassen</h1>       
        <form method="post" action="invoegen.php">
            <p>        
                <label for="user">voornaam:</label>
                <input type="text" name="voornaam" id="users" />
            </p>
            <p>        
                <label for="user">tussenvoegsel:</label>
                <input type="text" name="tussenvoegsel" id="users" />
            </p>
            <p> 
                <label for="pass">achternaam:</label>
               <input  type="text" name="achternaam" id="pass" />
            </p>
            <p>
                  <label for="pass">selectieid:</label>
               <input  type="text" name="selectieid" id="pass" />
            </p> 
             <p>
                  <label for="pass">teamid:</label>
               <input  type="text" name="teamid" id="pass" />
            </p> 
            <p>
             <input type="submit" value="Invoeren" />  
            </p>       
        </form>  
        
        <a href="overzicht.php">Ga naar het Overzicht</a>
    </body>
    </html>


