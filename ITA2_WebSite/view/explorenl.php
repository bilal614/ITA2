<?php 
    session_start();
    include '../includes/common.inc.php';
?>
<!DOCTYPE html>
<html>
    <?php displayHeadTag();?>
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
                            <li class="preActive"><a class="home" href="../index.php">Home</a><span></span></li>
                            <li class="activeLinkNav"><a  href="explorenl.php">Explore NL</a><span></span></li>
                        </ul>
                    </div>
                </div>
                <div class="innercontainer">
                    <div class="topCol">
                        <div class="leftcol">
                            <div id="culture" class="greybox" >
                                <a class="culture" href="culture.php" >
                                <div><img class="medium" src="../templates/images/explore/culture.jpg"
                                          alt="Food"></div>
                                </a>
                                <div class="orangeLine"></div>
                                <div class="desc">Culture</div>
                            </div>
                        </div>
                        <div class="rightcol">
                            <div id="weather" class="greybox">
                                <a class="weather" href="weather.php" >
                                <div><img class="medium"  src="../templates/images/explore/weather.jpg"
                                      alt="Shopping" ></div></a>
                                <div class="orangeLine"></div>
                                <div class="desc">Weather</div>
                            </div>
                        </div>  
                    </div>
                    <div class="bottomcol">
                        <div id="publictransport" class="greybox" >
                            <a class="transport" href="publictransport.php" >
                            <div><img class="large" src="../templates/images/explore/publictransport.png"
                                  alt="Cycling"  ></div></a>
                            <div class="orangeLine"></div>
                             <div class="desc">Public Transport</div>
                        </div>
                    </div><!--end div.bottomcol-->
                </div><!--end div.innercontainer-->
            </div><!--End #container-->
            <?php
            displayFooter();
            ?>
        </div>
    </body>
</html>         



