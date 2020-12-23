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
            <div class='' style='width:220px;'>
            <div class='card border-0 mr-2 my-3 cardhover' style='height:300pt;' >
                <div class='loadtemp'>
                    <img src='$productimage' class='card-img-top' alt='' style='height:180px;' >
                </div>
                <div class='card-body m-0 py-0 px-2'>
                    <p class='card-title'>
                        $productname
                    </p>
                
                    <p class='card-text'>
                        <b><span class='price'><s>N</s>$productprice</span><br></b>
                        <small> <s>N</s><s> 500</s></small>
                        <h6>
                            <i class='fas fa-star' aria-hidden='true'></i>
                            <i class='fas fa-star' aria-hidden='true'></i>
                            <i class='fas fa-star' aria-hidden='true'></i>
                            <i class='fas fa-star' aria-hidden='true'></i>
                            <i class='far fa-star' aria-hidden='true'></i>
                        </h6>
                    </p>
                
                    <button type='submit' id='add' data-pid='$productid' class='px-2 py-1 btn_viewdetails' name='add'>
                        
                        View Details
                    </button> 
                    <button type='submit' id='add' data-pid='$productid' class='px-2 py-1 btn_addtocart' name='add'>
                        <i class='fas fa-shopping-cart'></i>
                        Add to Cart
                    </button> 
                    
                
                </div>
            </div>
        </div>
            ";
        }
        
    }
}

if(isset($_POST["fetch_cartitems"])){
    $sql="SELECT * FROM productdb";
    $run_query=mysqli_query($conn,$sql);

    if (mysqli_num_rows($run_query)>0) {
        while ($row=mysqli_fetch_assoc($run_query)) {
            $productname=$row['product_name'];
            $productimage=$row['product_image'];
            $productprice=$row['product_price'];
            $productid=$row['p_id'];

            echo "
        <div class='' style='width:700px;'>
            <div class='card border-0 mr-2 my-3 cardhover' style='height:300px;' >
                <div class='card-body row p-0 m-0'>
                    <div class='loadtemp'>
                        <img src='$productimage' class='card-img-left' alt='' style='height:300px; width: 350px' >
                    </div>
                    <div class=' m-0 py-0 px-2'>
                        <p class='card-title'>
                            $productname
                        </p>
                    
                        <p class='card-text'>
                            <b><span class='price'><s>N</s>$productprice</span><br></b>
                            <small> <s>N</s><s> 500</s></small>
                            <h6>
                                <i class='fas fa-star' aria-hidden='true'></i>
                                <i class='fas fa-star' aria-hidden='true'></i>
                                <i class='fas fa-star' aria-hidden='true'></i>
                                <i class='fas fa-star' aria-hidden='true'></i>
                                <i class='far fa-star' aria-hidden='true'></i>
                            </h6>
                        </p>
                    
                        <button type='submit' id='add' data-pid='$productid' class='px-2 py-1 btn_viewdetails' name='add'>
                            
                            View Details
                        </button> 
                        <button type='submit' id='add' data-pid='$productid' class='px-2 py-1 btn_addtocart' name='add'>
                            <i class='fas fa-shopping-cart'></i>
                            Add to Cart
                        </button> 
                    </div>
                </div>
                
                
            </div>
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