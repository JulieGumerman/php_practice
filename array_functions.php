<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $br = "<br>";
    $list = ["eeny", "meeny", "miny", "mo", "big joe"];
    
    $num_list = [43, 36, 21, 17, 81, 63];
    echo max($list);
    echo $br;
    echo max($num_list);
    echo $br;
    echo min($list);
    echo $br;
    echo min($num_list);
    echo $br;
    echo sort($num_list);
    echo print_r($num_list);
    echo $br;
    echo sort($list);
    echo print_r($list);
    
    ?>
</body>
</html>