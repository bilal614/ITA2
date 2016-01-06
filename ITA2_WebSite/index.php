<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ISDN website</title>
            <meta name="homepage" content="An interactive guide for events in NL for students.">
            <link href="templates/css/style.css" type="text/css" rel="stylesheet"/>
            <script src = "js/jquery/jquery-2.1.4.min.js" type="text/javascript"/></script>
            <script src="js/jquery/jquery-2.1.4.js" type="text/javascript"></script>
            <script type="text/javascript" src="js/script/IndexScript.js">
            </script> 
            <link rel="stylesheet" 
                href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
            <script src="library/modernizr.js" type="text/javascript"></script>
        </head>
    <body>
        <div id="mainContainer">
            <header>
                <div id="leftLogo">
                    <a href="index.view.php"><img id="logo" 
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
                           <li ><a class="summerEvent" href="view/summerEvents.php">Summer events</a></li>
                           <li ><a class="autumnEvent" href="view/autumnEvents.php">Autumn events</a></li>
                           <li ><a class="winterEvent" href="view/winterEvents.php">Winter events</a></li>
                           <li ><a class="springEvent" href="view/springEvents.php">Spring events</a></li>
                           <li ><a class="springEvent" href="view/searchForEvent.php">Search for events</a></li>
                       </ul>
                   </li>
                   <li ><a class="contact" href="view/contact.php">Contact</a></li>
                </ul>
                </nav>
                <div id="Login">
                    <div>
                        <a id="btnLogin" href="controller/signIn.php">Login
                        </a>
                        <a id="btnSignUp" href="view/signUp.view.php">Sign up</a>
                    </div>
                </div>
            </header>  
            
            <div id="container">
                <?php include 'view/home.php'?>
            </div>
            
            <?php
            include 'view/footer.inc.php';
            ?>
        </div><!--end div#mainContainer!-->
        
    </body>
</html>
