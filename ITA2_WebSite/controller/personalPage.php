<?php
    session_start();
    require_once '../model/User.class.php' ;
    if(isset($_SESSION['userEmail'])){
        $email = $_SESSION['userEmail'];
        $eventAccount = EventAccount::getByEmailAddress($email);
        $infors = $eventAccount->GetData();
    }
    else{
        echo "Opps! You need to login for this page!";
    }   
    
   include '../webPages/profile.view.php';
        

