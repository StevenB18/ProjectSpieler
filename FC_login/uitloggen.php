<html>
    
    <body>

        <h1> uitloggen</h1>

<?php    
session_start();
session_destroy();
header('Location: form.php');
exit;
?>
    </body>
</html>

