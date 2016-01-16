<?php
session_start();
include '../model/User.class.php' ;
include '../includes/common.inc.php';

$errors = array();
    if(!empty($_POST)){
        if($_POST['password']==$_POST['confirmpassword']){
            $email = $_POST['email'];
            $password = $_POST['password'];
        }
        else{
            $errors[]="Password and confirm password do not match";
        }
    
        if(empty($email)){
            $errors[] = "Please enter your email";
        }
    
        if(empty($password)){
            $errors[] = "Please enter your password";
        }
    
        if(empty($_POST['confirmpassword'])){
            $errors[] = "Please confirm your password";
        }
        
        if(strlen($_POST['password'])< 8 && strlen($_POST['password'])>25){
            $errors[] = 'Your password must be between 8 and 24 characters long';
        }
        if(empty($errors)) {
        
        if(User::user_exists($email))
        {
            $errors[]="This email is already registered.";
        }
    }
 }


function HandleErrors(){
    global $errors;
    if(empty($errors) === false) {
            //oput errors
                echo output_error($errors); 
           }
}


function Register(){
    global $errors;
    if(!empty($_POST) && isset($_POST['submitButton']) && empty($errors)){    
        $date = date('y-m-d');
        $userData=array(
            'email' => $_POST['email'],
            'password'=> $_POST['password'],
            'username'=> $_POST['username'],
            'signupDate' => $date
        );
        $newUser=new User($userData);
        
        $newUser->register();
        $_SESSION['email']=$_POST['email'];
        echo '<div  style="padding: 10px;" class="bg-success" ><strong>Thank you! Your registration is successful!</strong>, please sign in and enjoy!</div>'  ;
        exit();
    }
    else {
        HandleErrors();
    }
}

include '../view/signUp.view.php';