<?php 
    session_start();
    $_SESSION['value'] = "Crush it!";
        

    $name = "HarleyQuinn";
    $value = "emancipation";
    $expiration = time() + (60*60*24*7);
    setcookie($name, $value, $expiration);

    if (isset($_GET['motto'])){
        print_r($_GET);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php 
        $motto="Just because you are small does not mean you are insignificant";
    ?>
    <a href="review.php?motto=<?php echo $motto; ?>">CLICK ME!</a>
</body>
</html>