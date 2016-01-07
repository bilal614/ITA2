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
    }

    else if(empty($errors)) {
        
        if(User::user_exists($email))
        {
            $errors[]="This email is already registered.";
        }
        else{
            if(isset($_POST['submitButton'])){
                //Redirect to signIn page
                header('Location: signIn.php');  
                exit();
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
        $date =  date('m.d.Y');
        $userData=array(
            'email' => $_POST['email'],
            'password'=> $_POST['password'],
            'signupDate' => $date
        );
        $newUser=new User($data);
        
        if(isset($_POST['submitButton'])){
            $result = User::register(); 
        }
}

include '../view/signUp.view.php';