<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>The Worlds Worst Calculator</title>
</head>

<body>
    <div class="container">
        <h1>Worlds Worst Calculator</h1>
        <?php
        if(isset($_POST['price'])) {
            $price = floatval($_POST['price']);
            if(isset($_POST['age'])) {
                if($_POST['age'] >= 65) {
                    $price *= 0.95; 
                } elseif($_POST['age'] < 12) {
                    $price *= 0.90;
                }
            }
            if(isset($_POST['loyalty'])) {
                $price *= 0.98;
            }
            if(isset($_POST['ns-customer'])) {
                $price *= 1.2;
            } else {
                $price *= 1.15;
            }
            echo ('<div class="price">The final price is: $'.round($price, 2).'</div>');
        }
        ?>
        <form class="calculator__form" method="POST" action="index.php">
            <div class="calculator__input-wrap">
                <label for="price">Price</label>
                <input type="text" name="price" id="price">
            </div>
            <div class="calculator__input-wrap">
                <label for="ns-customer">Nova Scotia Customer</label>
                <input type="checkbox" name="ns-customer" value="1">
            </div>
            <div class="calculator__input-wrap">
                <label for="age">Age</label>
                <select name="age" id="age-input">
                    <?php 
                        for ($i=0; $i < 99; $i++) { 
                            print <<<HERE
                            <option value="$i">$i</option>
                            HERE;
                        }
                    ?>
                </select>
            </div>
            <div class="calculator__input-wrap">
                <label for="loyalty">Loyalty Discount</label>
                <input type="checkbox" name="loyalty" value="true">
            </div>
            <input class="btn btn--submit" type="submit" value="Calculate Order">
        </form>
    </div>
</body>

</html>