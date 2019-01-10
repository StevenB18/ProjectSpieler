<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "
http://www.w3.org/TR/xhtml?DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <titel> Mijn eerste loginscript! </titel>   
 </head>
    <body>  
<?php        
session_start();
session_destroy();
header('Location: klanten.php');
exit;
  ?> 
        
 <a href="klanten.php">Logout</a>  


    </body>
    </html>
 

