<?php
    /**
     * Matt's SIC Sample Form Handler
     *
     * PHP Version 7.0.3
     * 
     * @category  Null
     * @package   Null
     * @author    Matt Redmond <matt.redmond@nscc.ca>
     * @copyright 2019 Matt R.
     * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
     * @version   GIT: 
     * @link      http://matt.nscctruro.ca/handler.php
     * @see       WEBD1000 HTML Course
     */

if (!empty($_POST)) {
    foreach ($_POST as $name => $value) {
        $html .= "<tr>";
        $html .= "<td class='right'>" . $name . "</td>";
        if (is_array($value)) {
            $html .= "<td class='left'>You chose: ";
            foreach ($value as $item) {
                $html .= $item . " " ;
            }
            $html .= "</td>";
            
        } else {
            $html .= "<td class='left'>" . $value . "</td>";
        }
        $html .= "</tr>";
    }
} else {
    $error = "<tr><td colspan='2'><h2>Ooops... no POST data!</h2> There are a couple possible reasons:</td></tr><tr><td class='left' colspan='2'><ol><li>Did you access this page via the submit button on your HTML form? i.e. action=\"URL\"</li><li>Did you you set the form method=\"post\" ?</li></ol></td></tr>";
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>PHP Form Handler</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
         body {
            font-family: arial, helvetica, sans-serif;
            font-size: 12px;
            padding-top: 1px;
            padding-left: 8px;
        }
        
        table {
            width: 50%;
            border-collapse: collapse;
            border-spacing: 0;
        }
        
        td {
            border-width: 1px;
            width: 75px;
            text-align: center;
        }
        
        td#header {
            border-style: none;
        }
        
        .right {
            text-align: right;
            padding-right: 5px;
        }
        .left {
            text-align: left;
            padding-left: 5px;
        }
        
        table#autoStyle tr:nth-child(even) {
            background-color: #CCCCCC;
        }
        
        table#autoStyle tr:nth-child(odd) {
            background-color: #999999;
        }
        
        table#autoStyle th {
            background-color: black;
            color: white;
            font-weight: bold;
        }
        
        table#autoStyle tr:hover {
            background-color: white;
        }
        
        th:first-child {
            border-radius: 6px 0 0 0;
        }
        
        th:last-child {
            border-radius: 0 6px 0 0;
        }
        
        th:only-child{
            border-radius: 6px 6px 0 0;
        }

    </style>
<body>
    <h2>Thanks for the sweet data!</h2>
    <h4>Here is what you sent (hopefully):</h4> <br>

    <table id="autoStyle">
        <tr><th>Name</th><th>Value</th></tr>
        <?php 
        if (isset($error)) {
            echo $error;
        } else {
            echo $html;
        } 
        ?>  
    </table>
    
    <h4>Here is the variable dump:</h4>
    <?php var_dump($_POST); ?>
    
    
</body>

