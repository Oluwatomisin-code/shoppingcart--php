$(document).ready(function(){
    
    //load cart quantity
    fetch_count();

    //load products for home page
    fetch_products();

    fetch_cartitems();


    function fetch_count(){
        $.ajax({
            url: "assets/php/addtocart_action.php",
            method: "POST",
            data:{fetch_no:1},
            success: function(data) {
                $("#cartcount").html(data)
            },
            error: function() {

            }

        })
    }

    function fetch_products(){
        $.ajax({
            url:"assets/php/productcomponent.php",
            method:"POST",
            data:{fetch_pro:1},
            success:function(data){
                $("#products").html(data);
            }
        });
    }

    function fetch_cartitems(){
        $.ajax({
            url:"assets/php/productcomponent.php",
            method:"POST",
            data:{fetch_cartitems:1},
            success:function(data){
                $("#cartproducts").html(data);
            }
        });
    }
    
})