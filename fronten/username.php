<?php
session_start();

if(isset($_GET["submit"])){
    $username = $_GET["username"];
    $_SESSION["username"] = $username;
    
    if(true){
        header("Location: intellichat.php");
        exit();
    }
}

?>
