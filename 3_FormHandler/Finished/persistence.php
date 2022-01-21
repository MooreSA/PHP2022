<!DOCTYPE html>

<html>
<head>
    <title>
        persistence demo
    </title>
</head>

<body>

    <h1>Persistence Demo</h1>
    <form>
        <?php
        //set and increment the counters
        // $txtBoxCounter = $_GET['txtBoxCounter']+1;
        // $hdnCounter = $_GET['hdnCounter']+1;

        // notice the errors on the first load... no value found in $_GET try this:
        
        if (isset($_GET['txtBoxCounter'])) {
            $txtBoxCounter = $_GET['txtBoxCounter']+1;
            $hdnCounter = $_GET['hdnCounter']+1;
        } else {
            $txtBoxCounter = 1;
            $hdnCounter = 1;
        }
        

        print <<<HERE

        <input type = "text" name = "txtBoxCounter" value = "$txtBoxCounter">

        <input type = "hidden" name = "hdnCounter" value = "$hdnCounter">
        <h3>The hidden value is $hdnCounter</h3>
        <input type = "submit" value = "click to increment counters">

HERE;
        // Terminator (HERE;) - must be the first thing on the line. Can't be indented! http://php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
        ?>

    </form>
</body>
</html>