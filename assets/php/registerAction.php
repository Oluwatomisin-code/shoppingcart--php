<?php
include "createdb.php";
include_once "db_connect.php";
    $fname= $_POST["f_name"];
    $lname= $_POST["l_name"];
    $email= $_POST["email"];
    $phone= $_POST["PhoneNo"];
    $addr= $_POST["Address"];
    $pass= md5($_POST["pass1"]);
    $pass2= md5($_POST["pass2"]);    
    
        
        $database= new createdb();
        
        if(empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($pass2) || empty($addr) || empty($phone)  ){
           
          echo "
          <div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Please fill all the fields</b>
          </div>
          ";
        }else{
          if(($pass != $pass2)){
              echo"
              <div class='alert alert-warning'>
                     <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <b>Passwords don't match</b>
             </div>";
            }else{
              
             $sql="SELECT * FROM users WHERE email= '$email' LIMIT 1";
               $check_query= mysqli_query($conn, $sql);
               $count= mysqli_num_rows($check_query);
                    if ($count>0){  
                     echo "
                   <div class='alert alert-warning'>
                     <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <b>Email already exist</b>
                  </div>
                  ";
                  exit();
              }else{
                
                  $sql= "INSERT INTO `users` (`u_id`, `f_name`, `l_name`, `email`, `password`, `phone_no`, `address`)
                  VALUES (NULL, '$fname', '$lname', '$email', '$pass', '$phone', '$addr')";
                  $run_query = mysqli_query($conn, $sql);
                  if($run_query){
                      echo "true"; 
                      exit();
                  }else{echo "error creating user, contact service provider";}
                }
            }
    }
    


?>                                                                