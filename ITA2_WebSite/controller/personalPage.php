<?php
    session_start();
    require_once '../model/User.class.php' ;
    require_once '../includes/common.inc.php' ;
    if(isset($_SESSION['userEmail'])){
        $email = $_SESSION['userEmail'];
        $userAccount = User::getUserAccount($email);
        $infor = $userAccount->GetData();
        $_SESSION['username'] = $infor['username'];
                
        if(isset($_COOKIE['LastVisited']))
        {
            $last = $_COOKIE['LastVisited'];
        }
        //Lasted time for visitor
        $year = 31536000 + time(); // 60seconds * 60 minutes * 24 hours * 365 days.s 
        setcookie('LastVisited',time(),$year);
        
        
    }
    else{
        echo "Opps! You need to login for this page!";
    }   
    
   include '../view/profile.view.php';
        

