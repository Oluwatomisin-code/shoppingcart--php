<?php
session_start();
/*if(isset($_SESSION["user_id"])){
    //header("location:index.php");
}*/

include_once "header.php";
?>
    


       
        <form method="post">
            <div class="escrow-form">
                <div class="col-md-12" id="login_msg">
                    <!--alert from login form-->
                </div>
                <div class="form-block">
                    <h2 class="form-heading">Account Sign In</h2>
                </div>
                <div class="form-block">
                    <label>Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" value="" required>
                </div>
                <div class="form-block">
                    <label>Password</label>
                    <input type="password" id="pass" name="pass" placeholder="Password" required>
                </div>
                <div class="form-block next">
                    <input type="submit" id="login_btn" value="Sign in" class="form-control btn btn-default btn-span btn-primary">
                </div>
                <div class="msg">
                    Not a member? <a href='signup.php'>Sign up</a><br/>
                    <a href='forgot.html'>Forgot Password?</a>
                </div>
                <div class="msg">
                    Note: If there are 3 or more failed login attempts your account will be locked for 30 minutes!
                </div>
            </div>
        </form>
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5e645b3f8d24fc2265865e9f/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
        <script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>

    <!-- Mirrored from www.Kkobit.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 21:40:43 GMT -->

    </html>