<?php
   $email=($_POST['email']);
   $pass=($_POST['password']);
   $conn= new mysqli("localhost","root","","user_db");
   if($conn->connect_error){
    die("failed to connect:".$conn->connect_error);

   }else{
    $stmt=$conn->prepare("select*from registration where email=?");
    
    
    
        if($data['password']===$password){
            header("location:ss.php");
            echo"<h2>login successfully</h2>";
        }else{
            echo"<h2>invalid email or password</h2>";
    
            }

    }
    

?>