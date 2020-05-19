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



$rev_dawg = new Dog();

class Puppy extends Dog {
    function mischief () {
        echo "Stop it,  " . $this -> name . ". You're lucky you're cute.";
    }
}

$fran = new Puppy();

$fran->name = "Fran";
$fran->come();
echo $br;
$fran->mischief();
echo $br;
if (class_exists("Puppy")) {
    echo "It just got real";
} else {
    echo "Ain't no puppy dogger";
}