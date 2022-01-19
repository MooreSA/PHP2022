<?php
    define("MY_CONSTANT", "This is a test of defining constants.");
    echo MY_CONSTANT;
    echo "<br> Defined? = ";
    echo defined('MY_CONSTANT');
    // point out that constants should be uppercase and should not start with a number or __

// Constants are GLOBAL variables! We can access them from anywhere :-)