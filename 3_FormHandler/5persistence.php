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


        // var_dump($txtBoxCounter);

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

        ?>

        </form>
</body>

</html>