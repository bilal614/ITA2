<?php
function displayHeadTag(){
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ISDN website</title> 
           <meta name="homepage" content="An interactive guide for events in NL for students.">
           <link href="../templates/css/style.css" type="text/css" rel="stylesheet"/>
           <script src = "../js/jquery/jquery-2.1.4.min.js" type="text/javascript"/></script>
           <script src="../js/jquery/jquery-2.1.4.js" type="text/javascript"></script>
           <script type="text/javascript" src="../js/script/Script.js">
           </script> 
           <link rel="stylesheet" 
               href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
           <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
           <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
           <script src="../js/jquery/jquery.validate.js"></script>
           
           <script src="../library/popupToddish/jquery.popup.min.js" type="text/javascript"></script>
           <link href="../library/popupToddish/popup.css" rel="stylesheet" type="text/css"/>
    </head>
<?php
}

function displayHeader(){
    if(isset($_SESSION['userEmail']) && $_SESSION['userEmail'] != ''){
        ?>
    <header>
            <div id="leftLogo">
                    <a href="../index.php"><img id="logo" 
                                                  src="../templates/images/index/logo.png" alt="ISNL">
                    </a>
                </div>
                <nav id = "mainMenu">
                <ul>
                  <li>
                      <a class="exploreNL" href="../view/explorenl.php">Explore NL</a>
                       <ul>
                           <li ><a class="culture" href="../view/culture.php">Culture</a></li>
                           <li ><a class="transport" href="../view/publictransport.php">Public transport</a></li>
                           <li ><a class="weather" href="../view/weather.php">Weather</a></li>
                       </ul>
                   </li>
                   <li>
                       <a class="thingstodo" href="../view/thingstodo.php">Things to do</a>
                       <ul>
                           <li ><a class="food" href="../view/food.php">Food</a></li>
                           <li ><a class="shopping" href="../view/shopping.php">Shopping</a></li>
                           <li ><a class="cycling" href="../view/cycling.php">Cycling</a></li>
                       </ul>
                   </li>
                   <li>
                       <a class="event" href="../view/events.php">Events</a>
                       <ul>
                           <li ><a class="summerEvent" href="../controller/event.php" onclick = "return loadingRequest('loadSummer');">Summer events</a></li>
                           <li ><a class="autumnEvent" href="../controller/event.php" onclick = "return loadingRequest('loadAutumn');">Autumn events</a></li>
                           <li ><a class="winterEvent" href="../controller/event.php" onclick = "return loadingRequest('loadWinter');">Winter events</a></li>
                           <li ><a class="springEvent" href="../controller/event.php" onclick = "return loadingRequest('loadSpring');">Spring events</a></li>
                           <li ><a class="searchForEvent" href="../view/searchForEvent.php">Search for events</a></li>
                       </ul>
                   </li>
                   <li ><a class="contact" href="../controller/contact.php">Contact</a></li>
                </ul>
            </nav>  
            <div id="LoginSuccess">
                <div>
                    <div class="user-image-wrapper">
                        <img class="user-image" src="../templates/images/index/user.png">
                    </div>
                    <div class="dropdown" id="name-wrapper">
                        <div class="dropdown-toggle user-name-style"  data-toggle="dropdown">
                            <?php
                            echo $_SESSION['username'];
                            ?>
                        <span class="caret"></span></div>
                        <ul class="dropdown-menu">
                            <li><a href="../controller/personalPage.php">Favorite events</a></li>
                          <li><a href="../controller/personalPage.php">Your profile</a></li>
                          <li><a id="btnLogOut" href="../controller/logOut.php">Log out</a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </header>
              
        <?php
    }
    else {
        ?>    
        <header>
                <div id="leftLogo">
                    <a href="../index.php"><img id="logo" 
                                                  src="../templates/images/index/logo.png" alt="ISNL">
                    </a>
                </div>
                <nav id = "mainMenu">
                <ul>
                  <li>
                      <a class="exploreNL" href="../view/explorenl.php">Explore NL</a>
                       <ul>
                           <li ><a class="culture" href="../view/culture.php">Culture</a></li>
                           <li ><a class="transport" href="../view/publictransport.php">Public transport</a></li>
                           <li ><a class="weather" href="../view/weather.php">Weather</a></li>
                       </ul>
                   </li>
                   <li>
                       <a class="thingstodo" href="../view/thingstodo.php">Things to do</a>
                       <ul>
                           <li ><a class="food" href="../view/food.php">Food</a></li>
                           <li ><a class="shopping" href="../view/shopping.php">Shopping</a></li>
                           <li ><a class="cycling" href="../view/cycling.php">Cycling</a></li>
                       </ul>
                   </li>
                   <li>
                       <a class="event" href="../view/events.php">Events</a>
                       <ul>
                           <li ><a class="summerEvent" href="../controller/event.php" onclick = "return loadingRequest('loadSummer');">Summer events</a></li>
                           <li ><a class="autumnEvent" href="../controller/event.php" onclick = "return loadingRequest('loadAutumn');">Autumn events</a></li>
                           <li ><a class="winterEvent" href="../controller/event.php" onclick = "return loadingRequest('loadWinter');">Winter events</a></li>
                           <li ><a class="springEvent" href="../controller/event.php" onclick = "return loadingRequest('loadSpring');">Spring events</a></li>
                       </ul>
                   </li>
                   <li ><a class="contact" href="../controller/contact.php">Contact</a></li>
                </ul>
                </nav>
                <div id="Login">
                    <div>
                        <a id="btnLogin" href="../controller/signIn.php">Login
                        </a>
                        <a id="btnSignUp" href="../controller/signUp.php">Sign up</a>
                    </div>
                </div>
            </header>
        <?php
    }
}

function displayFooter(){
    ?>
     <footer id = "footer">
        <div class="fLeftcol">
            <a href="http://www.holland.com/">Holland.com</a>
            <a href="http://www.iamsterdam.com/en/">I love Amsterdam</a>
        </div>
        <div class="fLeftcol">
            <a href="http://www.roughguides.com/">Rough Guide</a>
            <a href="https://www.studyinholland.nl/">Study in Holland</a>
        </div>
        <div id="fRightcol">
            <div>Connect with ISNL</div>
            <nav>
            <a id ="facebook"></a>
            <a id ="twitter"></a>
            </nav>
        </div>
    </footer>
<?php    
}

//remove special characters of input string, input variable is an item of array
function array_sanitize(&$item){
    $item = mysql_real_escape_string($item);
}
function output_error($error){
    return '<ul class = errorlist><li>'.implode('</li><li>',$error) . '</li></ul>';
}
function displayHeaderIndex(){
    if(isset($_SESSION['userEmail']) && $_SESSION['userEmail'] != ''){
        ?>
    <header>
            <div id="leftLogo">
                    <a href="index.php"><img id="logo" 
                                                  src="templates/images/index/logo.png" alt="ISNL">
                    </a>
                </div>
                <nav id = "mainMenu">
                <ul>
                  <li>
                      <a class="exploreNL" href="view/explorenl.php">Explore NL</a>
                       <ul>
                           <li ><a class="culture" href="view/culture.php">Culture</a></li>
                           <li ><a class="transport" href="view/publictransport.php">Public transport</a></li>
                           <li ><a class="weather" href="view/weather.php">Weather</a></li>
                       </ul>
                   </li>
                   <li>
                       <a class="thingstodo" href="view/thingstodo.php">Things to do</a>
                       <ul>
                           <li ><a class="food" href="view/food.php">Food</a></li>
                           <li ><a class="shopping" href="view/shopping.php">Shopping</a></li>
                           <li ><a class="cycling" href="view/cycling.php">Cycling</a></li>
                       </ul>
                   </li>
                   <li>
                       <a class="event" href="view/events.php">Events</a>
                       <ul>
                           <li ><a class="summerEvent" href="controller/event.php" onclick = "return loadingRequest('loadSummer');">Summer events</a></li>
                           <li ><a class="autumnEvent" href="controller/event.php" onclick = "return loadingRequest('loadAutumn');">Autumn events</a></li>
                           <li ><a class="winterEvent" href="controller/event.php" onclick = "return loadingRequest('loadWinter');">Winter events</a></li>
                           <li ><a class="springEvent" href="controller/event.php" onclick = "return loadingRequest('loadSpring');">Spring events</a></li>
                           <li ><a class="searchForEvent" href="view/searchForEvent.php">Search for events</a></li>
                       </ul>
                   </li>
                   <li ><a class="contact" href="controller/contact.php">Contact</a></li>
                </ul>
            </nav>  
            <div id="LoginSuccess">
                <div>
                    <div class="user-image-wrapper">
                        <img class="user-image" src="templates/images/index/user.png">
                    </div>
                    <div class="dropdown" id="name-wrapper">
                        <div class="dropdown-toggle user-name-style"  data-toggle="dropdown">
                            <?php
                            echo $_SESSION['username'];
                            ?>
                        <span class="caret"></span></div>
                        <ul class="dropdown-menu">
                            <li><a href="controller/personalPage.php">Favorite events</a></li>
                          <li><a href="controller/personalPage.php">Your profile</a></li>
                          <li><a id="btnLogOut" href="controller/logOut.php">Log out</a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </header>
              
        <?php
    }
    else {
        ?>    
        <header>
                <div id="leftLogo">
                    <a href="index.php"><img id="logo" 
                                                  src="templates/images/index/logo.png" alt="ISNL">
                    </a>
                </div>
                <nav id = "mainMenu">
                <ul>
                  <li>
                      <a class="exploreNL" href="view/explorenl.php">Explore NL</a>
                       <ul>
                           <li ><a class="culture" href="view/culture.php">Culture</a></li>
                           <li ><a class="transport" href="view/publictransport.php">Public transport</a></li>
                           <li ><a class="weather" href="view/weather.php">Weather</a></li>
                       </ul>
                   </li>
                   <li>
                       <a class="thingstodo" href="view/thingstodo.php">Things to do</a>
                       <ul>
                           <li ><a class="food" href="view/food.php">Food</a></li>
                           <li ><a class="shopping" href="view/shopping.php">Shopping</a></li>
                           <li ><a class="cycling" href="view/cycling.php">Cycling</a></li>
                       </ul>
                   </li>
                   <li>
                       <a class="event" href="view/events.php">Events</a>
                       <ul>
                           <li ><a class="summerEvent" href="controller/event.php" onclick = "return loadingRequest('loadSummer');">Summer events</a></li>
                           <li ><a class="autumnEvent" href="controller/event.php" onclick = "return loadingRequest('loadAutumn');">Autumn events</a></li>
                           <li ><a class="winterEvent" href="controller/event.php" onclick = "return loadingRequest('loadWinter');">Winter events</a></li>
                           <li ><a class="springEvent" href="controller/event.php" onclick = "return loadingRequest('loadSpring');">Spring events</a></li>
                       </ul>
                   </li>
                   <li ><a class="contact" href="controller/contact.php">Contact</a></li>
                </ul>
                </nav>
                <div id="Login">
                    <div>
                        <a id="btnLogin" href="controller/signIn.php">Login
                        </a>
                        <a id="btnSignUp" href="controller/signUp.php">Sign up</a>
                    </div>
                </div>
            </header>
        <?php
    }
}