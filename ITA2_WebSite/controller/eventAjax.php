<?php 
    session_start();
//    include 'personalPage.php';
//    require_once '../model/User.class.php';
//    
//    $favEventIds=array();
//    $email=$_SESSION['userEmail'];
//    $userAcct= User::getUserAccount($email);
    
    if($_POST['action'] == 'loadAutumn'){
         $_SESSION['autumn'] = true;
         $_SESSION['summer'] = false;
         $_SESSION['winter'] = false;
         $_SESSION['spring'] = false;
    }
    if($_POST['action'] == 'loadSummer'){
         $_SESSION['summer'] = true;
         $_SESSION['autumn'] = false;
         $_SESSION['winter'] = false;
         $_SESSION['spring'] = false;
    }
     if($_POST['action'] == 'loadSpring'){
         $_SESSION['spring'] = true;
         $_SESSION['summer'] = false;
         $_SESSION['winter'] = false;
         $_SESSION['autmn'] = false;
    }
    if($_POST['action'] == 'loadWinter'){
         $_SESSION['winter'] = true;
         $_SESSION['autumn'] = false;
         $_SESSION['summer'] = false;
         $_SESSION['spring'] = false;
    }
    
    if($_POST['action']==8)
    {
        $favEventIds[]=8;
    }
    
    if($_POST['action']==7)
    {
        $favEventIds[]=7;
    }
    
    if($_POST['action']==6)
    {
        $favEventIds[]=6;
    }
    
    if($_POST['action']==5)
    {
        $favEventIds[]=5;
    }
    
    if($_POST['action']==4)
    {
        $favEventIds[]=4;
    }
    
    if($_POST['action']==3)
    {
        $favEventIds[]=3;
    }
    
    if($_POST['action']==2)
    {
        $favEventIds[]=2;
    }
    
    if($_POST['action']==1)
    {
        $favEventIds[]=1;
    }
    
    foreach($favEventIds as $fId)
    {
        $userAcct->addToFavorites($fId);
    }