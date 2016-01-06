<?php 
    session_start();
    include '../includes/common.inc.php';
?>
<!DOCTYPE html>
<html>
    <?php displayHeadTag();?>
    <link rel="stylesheet" 
      href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <body>  
        <div id="mainContainer">
            <?php
                displayHeader();
            ?>
            <div id="container">
                <div id = "navLinkContainer">
                <div></div>
                    <div>
                        <ul id="navLink">
                            <li></li>
                            <li class="preActive"><a class="home" href="../index.php">Home</a><span></span></li>
                            <li class="preActive"><a class="event" href="events.php">Events</a><span></span></li>
                            <li class="activeLinkNav"><a href="summerEvents.php">Summer Events</a><span></span></li>
                        </ul>
                    </div>
                </div>
                <div class="innercontainer">
                <div class="eventPTitle">Summer event</div>
                <div class="greyline"></div>
                <div> 
                    <!----put carousel here!--->
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                          <div class="item active pinkpop">
                              <a href="#PINKPOP"><img src="../templates/images/events/Summer/pinkPop.jpg" alt="PINKPOP" ></a>
                            <div class="classCaption" class="Desc">
                                <div class="captionTitle">PINKPOP</div>
                                <div class="timeLocation">10 JUN - 12 JUN | Landgraaf</div>
                                <div class="eventContentD">Pinkpop is a multi-day event with different stages 
                                where (inter)national artists put on spectacular shows.Pinkpop is sold out almost 
                                every year.</div>
                            </div>
                          </div>
                          <div class="item kingday">
                              <a href="#King's Day"><img src="../templates/images/events/Summer/kingsDay.jpg" alt="King's Day" 
                                                           ></a>
                                <div class="classCaption" class="Desc">
                                    <div class="captionTitle">King's Day in the Netherlands</div>
                                    <div class="timeLocation">27 APR | Amsterdam</div>
                                    <div class="eventContentD">Participate in the national celebration on 27 April and 
                                            enjoy fun activities in every city! </div>
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
                    </div>

                </div><!--end div.UpperRow!--->
                </div><!--end div#innercontainer-->
            </div><!--End #container-->
            <?php
            displayFooter();
            ?>
        </div>
    </body>
</html>         

