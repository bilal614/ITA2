<?php
    session_start();
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
    $_SESSION['favList'] = $favEventIds;
