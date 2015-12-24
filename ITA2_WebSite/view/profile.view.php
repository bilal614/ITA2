<?php
//    session_start();
//    
//    //User can be in that page if and only if they login, other wise link them back to sign in
//    if(!isset($_SESSION['username']))
//    {
//        header("Location: signIn.php");
//    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ISDN website</title>
            <meta name="homepage" content="An interactive guide for events in NL for students.">
            <link href="../templates/css/style.css" type="text/css" rel="stylesheet"/>
            <script src = "../js/jquery/jquery-2.1.4.min.js" type="text/javascript"/></script>
    <script src="../js/jquery/jquery-2.1.4.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/script/script.js">
            </script> 
            <link rel="stylesheet" 
                href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        </head>
    <body>
        <div id="mainContainer">
            <header>
                <div id="leftLogo">
                    <a href="index.php"><img id="logo" src="../templates/images/index/logo.png" alt="ISNL"></a>
                </div>
                <nav id = "mainMenu">
                     <ul>
                       <li>
                           <a class="exploreNL" href="#Explore NL">Explore NL</a>
                            <ul>
                                <li ><a class="culture" href="#Culture">Culture</a></li>
                                <li ><a class="transport" href="#Public transport">Public transport</a></li>
                                <li ><a class="weather" href="#Weather">Weather</a></li>
                            </ul>
                        </li>
                        <li>
                           <a class="thingstodo" href="#Things to do">Things to do</a>
                            <ul>
                                <li ><a class="food" href="#Food">Food</a></li>
                                <li ><a class="shopping" href="#Shopping">Shopping</a></li>
                                <li ><a class="cycling" href="#Cycling">Cycling</a></li>
                            </ul>
                        </li>
                        <li>
                           <a class="event" href="#Events">Events</a>
                            <ul>
                                <li ><a class="summerEvent" href="#Summer Event">Summer events</a></li>
                                <li ><a class="autumnEvent" href="#Autumn Event">Autumn events</a></li>
                                <li ><a class="winterEvent" href="#Winter Event">Winter events</a></li>
                                <li ><a class="springEvent" href="#Spring Event">Spring events</a></li>
                            </ul>
                        </li>
                        <li ><a class="contact" href="#Contact">Contact</a></li>
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
                                //echo $_SESSION['username'];
                                ?>
                            <span class="caret"></span></div>
                            <ul class="dropdown-menu">
                              <li><a href="#">Favorite events</a></li>
                              <li><a href="#">Your profile</a></li>
                              <li><a id="btnLogOut" href="logOut.php">Log out</a></li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </header>  
        <div id="container">
            <div class="innercontainer">
                <div id ="topBox">
                    <div id = "picBox">
                        <span></span>
                    </div>
                    <div id = "inforBox">
                        <div class="name">Thanh Hnk</div>
                        <div class="email">
                            <span>Email:</span>
                            <span>thanhhnk@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="eventTitle greyBoxFavorite">Your favorite events: </div>
                <div id="eventResult" class="borderFavorite">
                <!----put carousel here!--->
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                       <!-- Wrapper for slides -->
                       <div class="carousel-inner" role="listbox">
                         <div class="item active">
                             <div class="event1 sevstyle">
                                  <a href="#Film"><img src="../templates/images/events/Autumn/autumn5.jpg" alt="Film"></a>

                                   <div class="eclassCaption" class="Desc">
                                       <div class="orangeLine"></div>
                                       <div class="scaptionTitle">Netherlands Film Festival</div>
                                       <div class="stimeLocation">23 Sept| Utrecht</div>
                                       <div class="seventContentD">Watch a large variety of Dutch movies at the Netherlands Film Festival in Utrecht. From very famous to truly obscure and from features and documentaries to short films and TV…</div>
                                   </div>
                             </div>
                             <div class="event2 sevstyle">
                                  <a href="#Film"><img src="../templates/images/events/Autumn/autumn4.jpg" alt="Film"></a>

                                   <div class="eclassCaption" class="Desc">
                                       <div class="orangeLine"></div>
                                       <div class="scaptionTitle">Portrait Gallery</div>
                                       <div class="stimeLocation">9 Nov - 31 Dec | Amsterdam</div>
                                       <div class="seventContentD">Thirty huge 17th-century group portraits from the collections of the Amsterdam Museum and the Rijksmuseum can be admired in Hermitage Amsterdam until the end of 2016…</div>
                                   </div>
                             </div>
                         </div>
                         <div class="item">
                            <div class="event1 sevstyle">
                                <a href="#PINKPOP"><img src="../templates/images/events/Summer/pinkPop.jpg" alt="PINKPOP" ></a>

                                   <div class="eclassCaption" class="Desc">
                                       <div class="orangeLine"></div>
                                       <div class="scaptionTitle">PINKPOP</div>
                                       <div class="stimeLocation">10 JUN - 12 JUN | Landgraaf</div>
                                       <div class="seventContentD">Pinkpop is a multi-day event with different stages 
               where (inter)national artists put on spectacular shows.Pinkpop is sold out almost 
               every year. </div>
                                   </div>
                             </div>
                             <div class="event2 sevstyle">
                                 <a href="#King's Day"><img src="../templates/images/events/Summer/kingsDay.jpg" alt="King's Day" 
                                          ></a>

                                   <div class="eclassCaption" class="Desc">
                                       <div class="orangeLine"></div>
                                       <div class="scaptionTitle">King's Day in the Netherlands</div>
                                       <div class="stimeLocation">127 APR | Amsterdam<</div>
                                       <div class="seventContentD">Participate in the national celebration on 27 April and 
                           enjoy fun activities in every city!</div>
                                   </div>
                             </div>
                         </div>
                       <!-- Left and right controls -->
                       <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                       </a>
                       <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                       </a>
                     </div>
                   </div><!--End div#myCarousel-->
                </div>
                <div id="botBox" class="eventTitle">
                    <div id="joinedBox">
                        <span>Joined: </span>
                        <span>Oct 21, 2015</span>
                    </div>
                    <div id="visitedBox">
                        <span>Last visited: </span>
                        <span>Nov 21, 2015</span>
                    </div>
                </div>
            </div>   <!--end div#innerContainer!--> 
        </div><!--end div#Container!-->
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
    </div><!--end div#mainContainer!-->
        
    </body>
</html>