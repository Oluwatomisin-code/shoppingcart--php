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
                $("#cartcount").html(data)
            },
            error:function(){

            }
        })
    })

    //signup
    $("#signup_btn").click(function(event){
        event.preventDefault();
        $("#signup_btn").val("please wait...");
        $.ajax({
            method:'POST',
            url: "assets/php/registerAction.php",
            data: $("form").serialize(),
            success: function(data){
                $("#signup_msg").html(data);
            }
        })
        
    })

    //login
    $("#login_btn").click(function(event) {
        event.preventDefault();
        var email = $("#email").val();
        var pass = $("#pass").val();
        $.ajax({
            url: "assets/php/loginAction.php",
            method: "POST",
            data: { userlogin: 1, email, pass },
            success: function(data) {
                if (data == "true") {
                    window.location.href = "./";
                } else {
                    $("#login_msg").html(data);
                }
            },
            error: function() {
                $("#login_msg").html("<div class='alert alert-danger'>error connecting with database</div>");
            }
        });
    });
}
);