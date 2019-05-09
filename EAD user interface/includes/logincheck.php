<?php
//start session
session_start();
// If the session variable is not set, redirect to login.php

if (!isset($_SESSION['login_user']))
    {
        header('Location: login.php');
    }
if ($_SESSION['login_level'] >= $pagelevel ) {
    
}
else{
    
   header('Location: 404.php'); 
    
}
?>