<?php

include "db_connect.php";
session_start();

//return number of cart for signd in user
function countno1(){
    include "db_connect.php";
    $userId=$_SESSION["user_id"];

    $sql="SELECT * FROM `cart` WHERE `u_id` ='$userId'";
    $run_query=mysqli_query($conn, $sql);
    $count=mysqli_num_rows($run_query);
    echo $count;
}

//return number of cart for signd in user
function countno2(){
        $cookie_data = stripcslashes($_COOKIE["shopping_cart"]);
        $cart = json_decode($cookie_data, true);
        $count=count(array_unique($cart));
        echo $count;
}

if(isset($_POST["fetch_no"])){
    if (isset($_SESSION["user_id"])) {
        countno1();
        exit;
    }else{
            countno2();
            exit;
    }
}

if (isset($_SESSION["user_id"]) && isset($_POST["pid"])) {

    

    //add to cart for logged in user
    $userId=$_SESSION["user_id"];

   
    if (isset($_POST["addtocart"])) {
         $proId=$_POST["pid"];
        $sql="SELECT * FROM `cart` WHERE `p_id`='$proId' AND `u_id` ='$userId'";
        $run_query=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($run_query);

        if ($count>0) {
            echo "Product is already in your cart";
            exit();
        }
    
        $sql="SELECT product_name FROM `productdb` WHERE `p_id`='$proId'";
        $run_query=mysqli_query($conn, $sql);
        if ($run_query) {
            $row = mysqli_fetch_assoc($run_query);
            $proname=$row['product_name'];
        
            $sql="INSERT INTO `cart`(`u_id`,`p_id`,`p_name`)
            VALUES('$userId', '$proId', '$proname')";
            $run_query=mysqli_query($conn, $sql);
            if (!$run_query) {
                exit("Error adding item to cart");
            };
            countno1();
            exit;
            
        }
    } else {
        exit("error adding to cart, please contact customer care");
    }
} else{
    
    if(isset($_POST["addtocart"])){

        //add to cart for random user
        $cart=array();
        if(isset($_COOKIE["shopping_cart"])){
            $cookie_data = stripcslashes($_COOKIE["shopping_cart"]);
            $cart = json_decode($cookie_data, true);
        }

        $pid=$_POST["pid"];
        array_push($cart, $pid);
        
        $proid=  json_encode($cart);
        setcookie('shopping_cart', $proid, time()+(86400*30));
        $_COOKIE["shopping_cart"]= $proid;
        countno2();
    }
}


?>