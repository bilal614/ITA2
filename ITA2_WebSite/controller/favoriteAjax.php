<?php
    session_start();
    require_once '../model/User.class.php';
    require_once '../model/Event.class.php';

    if($_POST['action']==8)
    {
        $favEventId=8;
    }
    
    if($_POST['action']==7)
    {
        $favEventId=7;
    }
    
    if($_POST['action']==6)
    {
        $favEventId=6;
    }
    
    if($_POST['action']==5)
    {
        $favEventId=5;
    }
    
    if($_POST['action']==4)
    {
        $favEventId=4;
    }
    
    if($_POST['action']==3)
    {
        $favEventId=3;
    }
    
    if($_POST['action']==2)
    {
        $favEventId=2;
    }
    
    if($_POST['action']==1)
    {
        $favEventId=1;
    }
    $message;
    $email = $_SESSION['userEmail'];
    $userAccount = User::getUserAccount($email);
    if(Event::checkEventID($favEventId))
    {
        if($userAccount->addToFavorites($favEventId)){
            $message = "This event is added to your favorite events";
            
        }
        else {
            $message = "Error! You already added it";
        }
    }
    require_once '../view/event.view.php';
