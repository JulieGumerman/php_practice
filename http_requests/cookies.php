<?php 

$name = "RevDawg";
$value = "1 in a million";
$expiration = time() + (60*60*24*7);
setcookie($name, $value, $expiration);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php 
    
       
    if (isset($_COOKIE[$name])) {
         $message = $_COOKIE[$name];
        echo $message;

    } else {
        echo "no dice";
    }
    
    ?>
    
</body>
</html>