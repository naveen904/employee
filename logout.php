<?php
session_start();

if ($result['Password'] == $password)
{   
    echo "your email is".$_SESSION['email'];
}

session_destroy();

header("Location://localhost/Registration/login.php"); 
   
?>