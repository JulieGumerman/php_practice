<?php 

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        $users = array("Bob", "Janet", "Magenta", "Frankenfurter");
//        echo "Hello" . $username;
//        echo "<br>";        
//        echo "Your password is " . $password;
        $minimum = 5;
        $username_length = strlen($username);
        $pw_length = strlen($password);
        
        $open_h4 = "<h4 style='color:red;'>";
        $close_h4 = "</h4>";
        
        if ($username_length === 0) {
            echo $open_h4 . "Please enter a username" . $close_h4 ;
        } 
        
        if ($username_length < 5) {
            echo $open_h4 . "Please enter a username with 5 or more letters" . $close_h4;
        }
        
        if (in_array($username, $users)) {
            echo $open_h4 . "There is already a user with this name. Please choose another." . $close_h4;
        }
        
        if ($pw_length === 0) {
            echo $open_h4 . "You still need a password" . $close_h4;
        } 
        
        if ($pw_length < 5) {
            echo $open_h4 . "Password is not secure. Please enter a password with five or more characters" . $close_h4;
        }
        

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <h3>Forms!!!</h3>
   <form action="forms.php" method="post">
       <input 
           type="text"
           name="username"
           placeholder="name"
       />
       <br>
       <input 
           type="password" 
           name="password"
           placeholder="password"
        />
        <br>
       <input 
           type="submit" 
           name="submit"
        />
   </form>
    
</body>
</html>