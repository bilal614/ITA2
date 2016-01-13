<?php 
    session_start();
    
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
    
   