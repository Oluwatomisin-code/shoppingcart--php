<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/shoppingcart.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <script src="assets/js/all.js"></script>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/action.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="pageheader">
            <a href="index.php">
            <h1><i class="fas fa-shopping-basket"></i>
            Shopping Cart</h1>
            </a>
        </div>
        <div class="cartlink">
            <a href="cartpage.php">
                <h4>
                    <i class="fas fa-shopping-cart"></i>
                    Cart
                    <?php
                        if(isset($_SESSION['cart'])){
                            $count=count($_SESSION['cart']);
                            echo"<span class='class_count'>$count</span>";
                        }else{
                            echo"<span class='class_count'>0</span>";
                        }

                    ?>
                </h4>
            </a>
        </div>
    </nav>