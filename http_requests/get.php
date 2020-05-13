<?php 

print_r($_GET);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

    $wog="Reverie";
    $doggo="doggo";

?>
<a href="get.php?wog=<?php echo $wog; ?>"><?php echo $doggo?></a>
</body>
</html>