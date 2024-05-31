<?php 
@include "config.php";


        
    
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> register now</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="form-container">
        <form action="a.php" method="post">
            <h3>REGISTER NOW</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo'<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>
            <input type="text" name="name" reguired placeholder="enter your name">
            <input type="email" name="email" reguired placeholder="enter your email">
            <input type="password" name="password" reguired placeholder="enter your password">
            <input type="password" name="cpassword" reguired placeholder="confirm your password">
            <select name="user_type">
               <option value="user">user</option>
               <option value="user">admin</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">login now</a></p>

        </form>   
        
        

</div>
</body> 
</html>

