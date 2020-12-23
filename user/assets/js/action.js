$(window).on("load", function(){
    //add to cart
    $("body").delegate("#add", "click", function(event){
        event.preventDefault();
        var pid= $(this).attr('data-pid');
        $.ajax({
            method:"POST",
            url:"assets/php/addtocart_action.php",
            data: {addtocart:1, pid},
            success: function(data){
                alert(data);
            },
            error:function(){

            }
        })
    })

}
);