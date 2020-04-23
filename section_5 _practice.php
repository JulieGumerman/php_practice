<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        $br = "<br>";
        echo "<h3>Pre-Built Math Function</h3>" . $br;
        echo pow(3,5);
        echo $br;
        echo "<h3>Pre-Built String Function</h3>" . $br;
        $string = "You need to take your vitamins.";
        echo strtoupper($string) . $br;
        echo strtolower($string) . $br;
        echo "<h3>Pre-Built Array Function</h3>" . $br;
        $my_random_array = ["born", "from", "the", "experience"];
        sort($my_random_array);
        echo print_r($my_random_array);
    ?>
</body>
</html>