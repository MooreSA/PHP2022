<?php 
    $header = "Welcome to WEBD3000";
    $body_p = "I Love PHP!";
    $myInt = 10;
    $myArr = ["W","E","B","D","3","0","0","0"];
    print <<<HERE
    <body style="background-color:green;">
    <h1 style="color:blue;">$header</h1>
    <p style="color:red">$body_p</p>
    
    HERE;
    
    for($x=0; $x <= count($myArr)-1; $x++){
        if($x == 3){
            echo $myArr[$x] . " ";    
        } else {
            echo $myArr[$x];
        }

        
        
    }
?>