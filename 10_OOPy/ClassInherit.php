<?php

// inheritance using extends keyword to create a second class that adds a newMethod
// overwrite inherited Properties and methods by declaring them again
// Preserve inherited method and add new functiomality using the parent keyword and scope resolution operator ::
// use :: to access static, constant and overridden properties or methods

class MyClass {
    public $prop1 = "I'm a class property!";
 
    public function __construct() {
        echo 'The class "', __CLASS__, '" was initiated!<br>';
    }
 
    public function __destruct() {
        echo 'The class "', __CLASS__, '" was destroyed.<br>';
    }
 
    public function __toString() {
        echo "Using the toString method: ";
        return $this->getProperty();
    }
 
    public function setProperty($newval) {
        $this->prop1 = $newval;
    }
 
    public function getProperty() {
        return $this->prop1 . "<br>";
    }
}
 // the extends keyword indicates that MyOtherClass inherits from MyClass
class MyOtherClass extends MyClass {
//we can overwrite a property or a method inherited from the parent class by simply declarining it again. 
    public function __construct() {
        parent::__construct(); // Then we can call the parent class's constructor to preserve original funcionality inherited from parent.
        echo "A new constructor in " . __CLASS__ . ".<br>";
    }
 
    public function newMethod() {
        echo "From a new method in " . __CLASS__ . ".<br>";
    }
}
 
// Create a new object
$newobj = new MyOtherClass;
 
// Output the object as a string
echo $newobj->newMethod();
 
// Use a method from the parent class
echo $newobj->getProperty();
 
?>