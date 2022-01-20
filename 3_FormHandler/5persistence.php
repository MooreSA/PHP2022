<!DOCTYPE html>
<html>

<head>
    <title>
        persistence demo
    </title>
</head>

<body>
    <h1>Persistence Demo</h1>
    <form action="5persistence.php">
        <?php
        if (isset($_GET['counter'])) {
            var_dump($_GET['counter']);
            $counter = $_GET['counter'] + 1;
        } else {
            $counter = 1;
        }
        print <<<HERE
        <input type="hidden" name="counter" value="$counter" />
        <p>$counter</p>
        <input type="submit" value="click to Increment" />
        HERE;
        ?>
    </form>
</body>

</html>