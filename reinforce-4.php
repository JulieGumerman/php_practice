<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php 
    
        function calculate($num1, $num2) {
            echo $num1 + $num2;
        }
    
        calculate(5, 7);
    
        echo "<br>";
    
        function snark($snarkiness) {
           return $snarkiness;
        }
    
        $snarky_comment = snark("Well, wasn't that fun!");
        echo $snarky_comment;
    ?>
    
</body>
</html>