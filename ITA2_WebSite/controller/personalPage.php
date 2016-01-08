<?php
    session_start();
    require_once '../model/User.class.php' ;
    require_once '../includes/common.inc.php' ;
    if(isset($_SESSION['userEmail'])){
        $email = $_SESSION['userEmail'];
        $userAccount = User::getUserAccount($email);
        $infor = $userAccount->GetData();
        $_SESSION['username'] = $infor['username'];
        
        //Lasted time for visitor
        
    }
    else{
        echo "Opps! You need to login for this page!";
    }   
    
   include '../view/profile.view.php';
        

