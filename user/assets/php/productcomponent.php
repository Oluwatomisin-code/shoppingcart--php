<?php

include_once "db_connect.php";

if(isset($_POST["fetch_pro"])){
    $sql="SELECT * FROM productdb";
    $run_query=mysqli_query($conn,$sql);

    if (mysqli_num_rows($run_query)>0) {
        while ($row=mysqli_fetch_assoc($run_query)) {
            $productname=$row['product_name'];
            $productimage=$row['product_image'];
            $productprice=$row['product_price'];
            $productid=$row['p_id'];

            echo "
        <div class='product_container'>
        <form method='POST'>    
        <img src='$productimage' alt=''>
            <h3>$productname</h3>
            <p> A brief description of this Product</p>
            <h3> $$productprice</h3>
            
                
                <button type='submit' id='add' data-pid='$productid' class='btn_addtocart' name='add'>
                    <i class='fas fa-shopping-cart'></i>
                    Add to Cart
                </button> 
            </form>
        </div>
            ";
        }
        
    }
}
/*function product($productname, $productprice, $productimage, $productid){
    $element="
        <div class='product_container'>
        <form method='POST'>    
        <img src='$productimage' alt=''>
            <h3>$productname</h3>
            <p> A brief description of this Product</p>
            <h3> $$productprice</h3>
            
                <input type='hidden' id='product_id' name='product_id' value='$productid'>
                <button type='submit' id='add' data-pid='$productid' class='btn_addtocart' name='add'>
                    <i class='fas fa-shopping-cart'></i>
                    Add to Cart
                </button> 
            </form>
        </div>
    ";
echo $element;
}*/

?>