<?php
session_start();
require_once'php/createdb.php';
include 'header.php';
require_once 'php/productcomponent.php';

$database= new createdb($dbname="product_database", $tablename="product_table")
?>
    <div id="cart_heading">
        <h2>
            My Cart
        </h2>
    </div>
    
    <?php

        if(isset($_SESSION['cart'])){
            $product_id= array_column($_SESSION['cart'], 'product_id');
        $result=$database->getdata();
        while($row=mysqli_fetch_assoc($result)){
            foreach($product_id as $id){
              if($row['Id']==$id){
                cart_element($row['Product_name'], $row['Product_price'], $row['Product_image']);
              }
            }
        }
        }else{
            echo"empty cart";
        }
            
    ?>
    </div>
</body>
</html>