<?php
    session_start();
    require_once '../model/User.class.php' ;
    require_once '../includes/common.inc.php' ;
    require_once '../model/Event.class.php';
    
    
    if(isset($_SESSION['userEmail'])){
        $email = $_SESSION['userEmail'];
        $userAccount = User::getUserAccount($email);
        $infor = $userAccount->GetData();
        $_SESSION['username'] = $infor['username'];
        $userAccount->getFavorites();
        $favoriteEventsIds = $userAccount->getAllFavoriteEvents();//array containing eventId's of all the events that are 
        //favorite events for the user
        
        $favoriteEvents=array();
        
        foreach($favoriteEventsIds as $eIds)
        {
            $favoriteEvents[]=Event::getEvent($eIds);
        }
        
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
    

    function DisplayFavoriteEvents()
    {
        ?>
        <div class="event1 sevstyle">
                <a href="#Film"><img src="../templates/images/events/Autumn/autumn5.jpg" alt="Film"></a>

                <div class="eclassCaption" class="Desc">
                <div class="orangeLine"></div>
                <div class="scaptionTitle">Netherlands Film Festival</div>
                <div class="stimeLocation">23 Sept| Utrecht</div>
                <div class="seventContentD">Watch a large variety of Dutch movies at the Netherlands Film Festival in Utrecht. From very famous to truly obscure and from features and documentaries to short films and TV…</div>
            </div>
        </div>
        <?php
    }
    
   include '../view/profile.view.php';
        

