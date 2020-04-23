<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        //functions
        function say_something() {
            echo "Fuck my life! I want a job already!";
        }
        //functions with parameters
        function wise_response($name, $addon) {
            echo "Just keep swimming, " . $name . $addon;
        }
    
        say_something();
        echo "<br>";
        wise_response("Julie", ". You've got this!!!");
    
        //returning functions
        function greeting($message) {
            return $message;
        }
    
        $result = greeting("You're killing it today");
    
        echo "<br>" . $result;
        
        //looking at scope
        $random_variable = "blah";
        echo $random_variable;
            
        function convert_to_global() {
            global $random_variable;
            $random_variable = "squee";
        }
        
        convert_to_global();
        echo $random_variable;
        
    ?>
</body>
</html>