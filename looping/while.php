<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>While loops</title>
</head>
<body>
    <?php 
        $counter = 100;
        while ($counter > 0) {
            if ($counter === 57) {
                echo "<h3>Oops. I was asleep and then jerked awake</h3>";
            }
            echo $counter . " sheep" . "<br>";
            $counter --;
        }
        echo "asleep";
    ?>
</body>
</html>