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
    
    $email = $_SESSION['userEmail'];
    if(Event::checkEventID($favEventId))
    {
        if(User::addToFavorites($favEventId, $email)){
            echo 'Added';
        }
        else {
            echo "Error";
        }
    }
