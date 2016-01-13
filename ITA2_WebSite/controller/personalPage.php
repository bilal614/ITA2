<?php
    session_start();
    require_once '../model/User.class.php' ;
    require_once '../includes/common.inc.php' ;
    require_once '../model/Event.class.php';

    $favEventIds=array();
    $favEventIds;
    
    
    
//    $email=$_SESSION['userEmail'];
//    $userAcct= User::getUserAccount($email);
//    
//        if(!empty($email)){
//        $user = User::getUserAccount($email);
//        $user->getFavorites();
//        $favEvnts = $user->getAllFavoriteEvents();
//    }
    
    
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
        global $favoriteEvents;
        $size = sizeof($favoriteEvents);
        $allEvents = $favoriteEvents[0]->GetData();
        if(!empty($allEvents))
        {
        ?>
        <div class="item active">
                <a href="#Film"><img src="<?php echo $allEvents['pictureLink'] ?>" alt="Film"></a>

                <div class="eclassCaption" class="Desc">
                <div class="orangeLine"></div>
                <div class="scaptionTitle"><?php echo $allEvents["name"]; ?></div>
                <div class="stimeLocation"><?php echo $allEvents['date'] ."|".$allEvents['location']; ?></div>
                <div class="seventContentD"><?php echo $allEvents['description']; ?></div>
            </div>
        </div>
        <?php
        for($i=1;$i<$size;$i++)
        {
            $allEvents = $favoriteEvents[$i]->GetData();
        ?>
        <div class="item">
                <a href="#Film"><img src="<?php echo $allEvents['pictureLink'] ?>" alt="Film"></a>

                <div class="eclassCaption" class="Desc">
                <div class="orangeLine"></div>
                <div class="scaptionTitle"><?php echo $allEvents["name"]; ?></div>
                <div class="stimeLocation"><?php echo $allEvents['date'] ."|".$allEvents['location']; ?></div>
                <div class="seventContentD"><?php echo $allEvents['description']; ?></div>
            </div>
        </div>
        <?php
        }
        }
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
        $userAccount->addToFavorites($fId);
    }
    
   include '../view/profile.view.php';
        

