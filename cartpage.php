<?php
session_start();
require_once'assets/php/createdb.php';
include 'header.php';
require_once 'assets/php/productcomponent.php';

$database= new createdb($dbname="product_database", $tablename="product_table")
?>
    <div class="contain my-5 pt-5" id="cart_heading">
        <h2>
            My Cart
        </h2>
    </div>
    <div class="contain mx-auto">
        <div id="cartproducts">
        
        </div>
    </div>
    
    
    
    </div>
</body>
</html>