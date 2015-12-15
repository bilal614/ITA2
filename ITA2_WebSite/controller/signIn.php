<?php
require '../model/UsersDAO.php';
include '../signIn.view.php';
session_start();


if(isset($_POST["login"])){
    login();
} elseif( isset($_GET["action"]) and $_GET["action"]=="logout"){
    logout();
}elseif(isset($_SESSION["username"])){
    displaypage();
}else{
    echo '<p>Could not login.';
}

 function login($email,$password){
     if(isset($_POST["email"]) and isset($_POST["password"])){
         if($_POST["email"]==$email and $_POST["password"]==$password){
             $_SESSION["username"]=$email;
             session_write_close();
             header("Location: signIn.view.php");
         }else{echo "<p>Email and password do not exist in the system.";}
     }
 }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>