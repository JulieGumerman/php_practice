<?php 

$br = "<br>";
class Dog {
    var $name = "good girl";
    var $breed = "dog";
    var $nose = "cold and wet";
    var $tummy = "warm and ready for belly rubs!";
    function rollover() {
        echo "Stop, drop, and roll!";
    }
    
    function shake() {
        echo "Hand me that paw!";
    }
    
    function come () {
        echo "Come here, " . $this -> name;
    }
}

if (class_exists("Dog")) {
    echo "The class does exist";
} else {
    echo "The class will exist if you build it";
}

echo $br;

if (method_exists("Dog", "rollover")) {
    echo "Method exists, so trick exists";
} else {
    echo "You either need to learn to write code or train your dog.";
}
echo $br;

$rev_dawg = new Dog();
$fran = new Dog();

$rev_dawg -> rollover();
echo $br;
$fran -> shake();
echo $br;

echo $rev_dawg -> tummy;
$rev_dawg -> name = "Reverie";
echo $br;
echo $rev_dawg -> name;
echo $br;
echo $rev_dawg -> come();
?>