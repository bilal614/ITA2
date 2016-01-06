<?php 
    session_start();
    include '../includes/common.inc.php';
?>
<!DOCTYPE html>
<html>
    <?php displayHeadTag(); ?>
    <body>  
        <div id="mainContainer">
            <?php
                displayHeader();
            ?>
            <div id="container">
               <div id = "navLinkContainer">
                <div>
                </div>
                <div>
                    <ul id="navLink">
                        <li></li>
                        <li class="preActive"><a href="../index.php">Home</a><span></span></li>
                        <li class="activeLinkNav"><a href="events.php">Events</a><span></span></li>
                    </ul>
                </div>
            </div>
            <div class="innercontainer">
                <div class= "topCol">
                    <div class="leftcol">
                        <div id="summer" class="greybox">
                            <a class="summer" href="summerEvents.php" >                                    
                            <div><img class="medium" src="../templates/images/events/summer.jpg"
                                      alt="Summer"></div></a>
                            <div class="orangeLine"></div>
                            <div class="desc">Summer Events</div>
                        </div>
                    </div>
                    <div class="rightcol" >
                        <div id="spring" class="greybox">
                            <a class="spring" href="springEvents.php" >

                            <div><img class="medium" src="../templates/images/events/spring.jpg"
                                  alt="Spring" ></div></a>
                            <div class="orangeLine"></div>
                            <div class="desc">Spring Events</div>
                        </div>
                    </div>
                </div>
                <div class= "botCol">
                    <div class="leftcol">
                        <div id="autumn" class="greybox" >
                            <a class="autumn" href="autumnEvents.php" >
                                <div><img class="medium" src="../templates/images/events/autumn.jpg"
                                  alt="Autumn"  ></div></a>
                            <div class="orangeLine"></div>
                            <div class="desc">Autumn Events</div>
                        </div>
                    </div><!--end div.bottomrightcol-->
                    <div class="rightcol">
                        <div id="winter" class="greybox" >
                            <a class="winter" href="winterEvents.php" >
                                <div><img class="medium" src="../templates/images/events/winter.jpg"
                                  alt="Winter"  ></div></a>
                            <div class="orangeLine"></div>
                            <div class="desc">Winter Events</div>
                        </div>
                    </div><!--end div.bottomleftcol-->
                </div>
                <div id="searchButton" class="searchEvents">
                    <a  id="searchEvent" href="searchForEvent.php">
                    </a>
                </div>
            </div><!--end div.innercontainer-->
            </div><!--End #container-->
            <?php
            displayFooter();
            ?>
        </div>
    </body>
</html>         
   

