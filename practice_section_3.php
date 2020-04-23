<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<h3>If statement</h3>";

    $crush = "Matt";
    if ($crush === "Matt") {
        echo "Because he is awesome and fun";
    } elseif ($crush = "Wilson") {
        echo "Good luck girlie. Don't say you weren't warned";
    } else {
        echo "Be awesome and carry on";
    }
    echo "<h3>For loop</h3>";
    
    for ($i = 0; $i < 10; $i++) {
        echo $i . "<br>";
    }
    
    echo "<h3>Switch</h3>";
    $name = "Esther";
    switch($name === "Esther") {
        case $name === "Bob":
            echo "We found Bob";
            break;
        case $name === "Julie":
            echo "We found Julie";
            break;
        case $name === "Esther":
            echo "We found Esther";
            break;
        default:
            echo "We couldn't find them";
    }
    ?>
    

</body>
</html>