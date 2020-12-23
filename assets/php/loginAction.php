<?php
include "createdb.php";
include_once "db_connect.php";
session_start();
    
$email=mysqli_real_escape_string($conn, $_POST["email"]);
$pass= md5($_POST["pass"]);

$database= new createdb();
if($database){
  if(isset($_POST["userlogin"])){
    
      $sql= "SELECT * FROM users WHERE email='$email' AND password='$pass'";
      $run_query=mysqli_query($conn,$sql);
      $check=mysqli_num_rows($run_query);
      if($check == 1){
        
        $rows=mysqli_fetch_assoc($run_query);
        $_SESSION["user_id"]= $rows["u_id"];
        $_SESSION["email"]= $rows["email"];
        echo "true";
        exit();
      }
      else{
            if($check == 0){
            
              echo "
              <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <small>username or password incorrrect</small>
              </div>
                      ";
            }
          }  
                 
  }            
}else{
  die("connection failed:".mysqli_connect_error());
}
       
?>                                                                                                                                                                                                           
 