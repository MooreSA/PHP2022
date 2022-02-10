<?php
//Constructor
//Destructor
//unset()

class MyClass {
    public $prop1 = "I'm a class property!";
    
    // our fist magic method, the constructor -  the magic method __construct(), which is called automatically whenever a new object is created
    public function __construct() {
        //notice the magic constant __CLASS__ - returns the name of the class in which it is called
        echo 'The class "', __CLASS__, '" was initiated!<br />';
    }
 
    public function __destruct() {
        // this is a useful method for closing a db connection or any other cleanup
        echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }
 
    public function setProperty($newval) {
        $this->prop1 = $newval;
    }
 
    public function getProperty() {
        return $this->prop1 . "<br />";
    }
}
 
// Create a new object
$obj = new MyClass;
 
// Get the value of $prop1
echo $obj->getProperty();

//When the end of a file is reached, PHP automatically releases all resources. We can do it manually though...
// Destroy the object, this happens automatically at the end of the file... but why take chances?
unset($obj);
 
// Output a message at the end of the file
echo "End of file.<br />";
 
?>