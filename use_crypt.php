<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $br = "<br>";
        $succulents = "Succulents are a thing of beauty.";
        echo $succulents . $br;
        
        $hashformat = "$2y$10$";
        $salt = "thisstringhas22charact";
            
        $hashF_and_salt = $hashformat  . $salt;
        echo $hashF_and_salt . $br;
        
        $encrypt_succulents = crypt($succulents, $hashF_and_salt);
        echo $encrypt_succulents;
    ?>
    
    
</body>
</html>