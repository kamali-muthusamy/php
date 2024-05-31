
<?php
// Start session
session_start();

// Assuming you have user information stored in session
// For example:
$_SESSION['user_type'] = 'user'; // This could be 'user' or 'admin'

// Check user role and redirect accordingly
if ($_SESSION['user_type'] == 'admin'){
if ($_SESSION['user_type'] == 'admin') {
    header("Location: index.html");
   
} else {
    header("Location: ad.php");
    
}
}
else {
    header("Location: b.php");
    exit();
}
?>


