<?php
// Example of login process
session_start();

// Assume you have validated user credentials and fetched user role from database
$user_role = 'admin'; // This would be fetched from your database based on login credentials

// Set user role in session
$_SESSION['user_type'] = $user_role;

// Redirect based on user role
if ($_SESSION['user_type'] == 'admin') {
    header("Location: ad.php");
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>
