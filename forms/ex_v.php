    <?php 


//if post is set as...
    if(isset($_POST['submit'])){
        $doggo = $_POST['doggo'];
        echo $doggo;
        $open = "<h4 style='color:red;'>";
        $close = "</h4>";
        $lenname=strlen($doggo);
            
        if ($lenname < 1) {
            echo  $open . "Please enter your dog's name." . $close;
        } elseif ($lenname < 3) {
            echo $open . "No dogs have names less than 3 characters long!" . $close;
        }
        
        if ($lenname > 15) {
            echo $open . "We all know your dog's name is not " . $lenname . " characters long." ;
        }
        
        
    }
    //start validating

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>