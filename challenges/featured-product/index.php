<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>SUCH GREAT PRODUCT!</title>
</head>

<body>
    <div class="container">
        <?php
            if(isset($_GET['feature'])) {
                switch ($_GET['feature']) {
                    case '1':
                        $featuredProduct = "Apple Juice";
                        break;
                    case '2':
                        $featuredProduct = "Orange Juice";
                        break;
                    case '3':
                        $featuredProduct = "Grape Juice";
                        break;
                    default:
                        break;
                }
                echo ('<div class="product__featured">Feature!!! Product: '.$featuredProduct.' 10% off!</div>');
            }
        ?>
        <div class="products">
            <a href="index.php?feature=1" class="product">
                <div class="product__img"></div>
                <div class="product__content">APPLE JUICE</div>
            </a>
            <a href="index.php?feature=2" class="product">
                <div class="product__img"></div>
                <div class="product__content">ORANGE JUICE</div>
            </a>
            <a href="index.php?feature=3" class="product">
                <div class="product__img"></div>
                <div class="product__content">GRAPE JUICE</div>
            </a>
        </div>
    </div>
</body>

</html>