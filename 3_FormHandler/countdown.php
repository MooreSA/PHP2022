<?php
/**
 * Matt's SIC Sample for form handling
 *
 * PHP Version 8.1.1
 * 
 * @category   SIC 
 * @package    Null
 * @author     Matt Redmond <matt.redmond@nscc.ca>
 * @copyright  2020 Matt R.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    GIT: 
 * @link       http://php
 * @see        other documentation
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
/**
 * This is a sample "docblock", Poperly formatted to satisfy the linter
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Count Down to Race Day</title>
</head>
<body> 
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="row">
                <h2>OMG, don't freak out, but there are only _____ days remaining!!!!</h2>
            </div>
            <form class="form" method="post" action="countdown.php">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label-lg" for="txt_newDate">Check a new date: </label>
                    <div class="col-sm-10">
                        <input class="form-control-lg" type="date" name="txt_newDate" id="txt_newDate">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-lg" type="submit">Check!</button>
                    </div>    
                </div>
            </form>
        </div>
    </div>
</body>
</html>
