<?php

include_once "db_connect.php";


$proId=$_POST["pid"];
$userId=$_SESSION["user_id"];
if(isset($_POST["addtocart"])){
    $sql="SELECT * FROM `cart` WHERE `p_id`='$proId' AND `u_id` ='$userId'";
    $run_query=mysqli_query($conn, $sql);
    $count=mysqli_num_rows($run_query);

    if($count>0){
        echo "Product is already in your cart";
        exit();
    }
    $sql="SELECT product_name FROM `productdb` WHERE `p_id`='$proId' AND u_id ='$userId'";
    $run_query=mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($run_query)){
        $proname=$row['product_name'];

        $sql="INSERT INTO `cart`(`u_id`,`p_id`,`p_name`)
            VALUES('$userId', '$proId', '$proname')";
    }
    

}

?>