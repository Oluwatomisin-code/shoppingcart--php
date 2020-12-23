<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="assets/css/shoppingcart.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/all.js"></script>
    
    
    <script type="text/javascript" src="assets/js/action.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
</head>
<body class="">
<nav class="navbar fixed-top navbar-default navbar-expand-lg bg-dark shadow">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand text-light">
                Shopping Cart
                </a>
            </div>
            <form class="form-inline my-lg-0">
                <input class="form-control border-light" type="search" placeholder="Search" aria-label="Search" style=" margin:0px; width: 500px; background:none!important; border-radius: 25px 0 0 25px; border-right: none;">
                <button class="btn text-light" type="submit" style=" margin:0px; border-right: thin solid #ffffff; border-top: thin solid #ffffff; border-bottom: thin solid #ffffff; margin:0px; border-radius: 0 25px 25px 0;">
                    <i class="fa fa-search"></i>
                </button>   
            </form>
            <ul class="nav navbar-nav navbar-right" >
                <!--<li class="nav-item"><a href="" class="nav-link btn btn-outline-light">Start Shopping</a></li>-->
                <li class="nav-item text-light">
                    <a href="" class="nav-link text-light">
                    <i class="fa fa-bell"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="acctdropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="acctdropdown">
                        <a href="" class="dropdown-item" data-toggle="modal" data-target="#loginmodal">Login</a>
                        <a href="" class="dropdown-item" data-toggle="modal" data-target="#regmodal">Create Account</a>
                    </div>
                    
                </li>
                <li class="nav-item"  style="background-color: rgba(2, 18, 31, .8);">
                    <a href="" class="nav-link text-light"><i class="fa fa-cart-plus"></i>
                    <small>
                        <span class="bg-dark text-white" id="cartcount" style="width: fit-content; padding: 1px 3px; border-radius: 8px;">
                            0
                        </span>
                    </small>
                        
                    </a>
                </li>
            </ul>
        </div>
    </nav>

<!--Login Modal-->
    <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">

        <div class="modal-dialog modal-lg" style="overflow:hidden;" role="document">
            <div class="modal-content rounded-0 border-0">
            <div class="modal-body p-0">
                <div class="row" id="login-box">
                    <div class="col-md-12">
                        <div class="card-group">
                            <div class="card card-sideL col-7 border-0 justify-content-center p-4">
                                <h3 class="text-center font-weight-bold">
                                    Account Sign-in
                                </h3>
                                <hr class="my-3">
                                    <form method="post">
                                        <div class="col-md-12" id="login_msg">
                                            <!--alert from login form-->
                                        </div>
                                        <div class="form-group">
                                            <label for="usernameorEmail">Username or Email</label>
                                            <input class="form-control" type="text" id="email" name="email" placeholder="Username" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control" type="password" id="pass" name="pass" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" id="login_btn" value="Sign in" class="form-control btn btn-default btn-span btn-primary">
                                        </div>
                                        <div class="msg">
                                            Not a member? <a href='signup.php'>Sign up</a><br/>
                                            <a href='forgot.html'>Forgot Password?</a>
                                        </div>
                                    </form> 
                            </div>
            
                                <div class="card px-3 col-5 card-sideR bg-dark text-center">
                                    <span class="close ml-auto" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                                        <div class="close-circle" >&times;</div>
                                    </span>
                                        <div class="card-text my-auto text-light">
                                            Enter your Personal details to Start Shopping with us
                                            <button class="btn btn-outline-primary mt-4">
                                                Sign Up
                                            </button>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<!--registration form-->
<div class="modal fade" id="regmodal" tabindex="-1" role="dialog" aria-labelledby="regmodal" aria-hidden="true">

    <div class="modal-dialog modal-lg" style="overflow:hidden;" role="document">
        <div class="modal-content rounded-0 border-0">
        <div class="modal-body p-0">
            <div class="row" id="login-box">
                <div class="col-md-12">
                    <div class="card-group">
                        <div class="card card-sideL col-7 border-0 justify-content-center p-4">
                            <h3 class="text-center font-weight-bold">
                                Account Sign-in
                            </h3>
                            <hr class="my-3">
                                <form class="" method="post">
                                    <div class="col-md-12" id="signup_msg">
                                        <!--alert from login form-->
                                    </div>
                                    <div class="form-group">
                                        
                                        <input class="form-control input-sm" type="text" id="f_name" name="f_name" placeholder="First name" value="" required>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input class="form-control" type="text" id="l_name" name="l_name" placeholder="Last name" value="" required>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input class="form-control" type="text" id="email" name="email" placeholder="E-mail" value="" required>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input class="form-control" type="text" id="PhoneNo" name="PhoneNo" placeholder="Contact Number" value="" required>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input class="form-control" type="text" id="Address" name="Address" placeholder="Address" value="" required>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input class="form-control" type="password" id="pass1" name="pass1" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input class="form-control" type="password" id="pass2" name="pass2" placeholder="Re-enter Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" id="signup_btn" value="Sign Up" class="form-control btn btn-default btn-span btn-primary">
                                    </div>
                                    <div class="msg text-center">
                                        Do You have an existing Account? <a href='signup.php'>Sign in</a><br/>
                                        <a href='forgot.html'>Forgot Password?</a>
                                    </div>
                                </form> 
                        </div>
        
                            <div class="card px-3 col-5 card-sideR bg-dark text-center">
                                <span class="close ml-auto" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                                    <div class="close-circle" >&times;</div>
                                </span>
                                    <div class="card-text my-auto text-light">
                                        Enter your Personal details to Start Shopping with us
                                        <button class="btn btn-outline-primary mt-4">
                                            Sign Up
                                        </button>
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
<!--forgotPassword form-->
<div class="modal fade" id="forgotPassmodal" tabindex="-1" role="dialog" aria-labelledby="forgotPassmodal" aria-hidden="true">

    <div class="modal-dialog modal-lg" style="overflow:hidden;" role="document">
        <div class="modal-content rounded-0 border-0">
        <div class="modal-body p-0">
            <div class="row" id="login-box">
                <div class="col-md-12">
                    <div class="card-group">
                        <div class="card card-sideL col-7 border-0 justify-content-center p-4">
                            <h3 class="text-center font-weight-bold">
                                Account Sign-in
                            </h3>
                            <hr class="my-3">
                                <form method="post">
                                    <div class="col-md-12" id="login_msg">
                                        <!--alert from login form-->
                                    </div>
                                    <div class="form-group">
                                        <label for="usernameorEmail">Username or Email</label>
                                        <input class="form-control" type="text" id="usernameorEmail" name="username" placeholder="Username" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" id="pass" name="pass" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" id="login_btn" value="Sign in" class="form-control btn btn-default btn-span btn-primary">
                                    </div>
                                    <div class="msg">
                                        Not a member? <a href='signup.php'>Sign up</a><br/>
                                        <a href='forgot.html'>Forgot Password?</a>
                                    </div>
                                </form> 
                        </div>
        
                            <div class="card px-3 col-5 card-sideR bg-dark text-center">
                                <span class="close ml-auto" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                                    <div class="close-circle" >&times;</div>
                                </span>
                                    <div class="card-text my-auto text-light">
                                        Enter your Personal details to Start Shopping with us
                                        <button class="btn btn-outline-primary mt-4">
                                            Sign Up
                                        </button>
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
