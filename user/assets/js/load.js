$(document).ready(function(){

    fetch_products();
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
})