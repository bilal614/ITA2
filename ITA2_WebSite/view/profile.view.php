<!DOCTYPE html>
<html>
    <?php displayHeadTag(); ?>
    <body>
        <div id="mainContainer">
        <?php displayHeader();
        ?>     
        <div id="container">
            <div class="innercontainer">
                <div id ="topBox">
                    <div id = "picBox">
                        <span></span>
                    </div>
                    <div id = "inforBox">
                        <div class="name"><?php echo$_SESSION['username']; ?></div>
                        <div class="email">
                            <span>Email:</span>
                            <span><?php echo$_SESSION['userEmail']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="eventTitle greyBoxFavorite">Your favorite events: </div>
                <div id="eventResult" class="borderFavorite">
                <!----put carousel here!--->
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
<!--                         Indicators 
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>-->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <?php
                          global $favoriteEvents;
                          if(!empty($favoriteEvents))
                          {
                            DisplayFavoriteEvents();
                          }
                          else{
                              ?>
                                <div class="alert alert-warning alert-dismissible fade in" role="alert"> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button> 
                                    <strong>You have no favorite events added to you list at the moment.</strong> Please browse through our event pages and select events that you like. 
                                </div>
                              <?php
                          }
                          ?>
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
                        <span><?php echo date_format(date_create($infor['signupDate']),'jS F Y');?></span>
                    </div>
                    <div id="visitedBox">
                        <span>Last visited: </span>
                        <span><?php echo date("jS F Y",$last);?></span>
                    </div>
                </div>
            </div>   <!--end div#innerContainer!--> 
        </div><!--end div#Container!-->
        <?php
             displayFooter();
        ?>
    </div><!--end div#mainContainer!-->
    </body>
    <script>
         $(document).ready(function() {
                $("div.carousel-inner div.item:first-child").addClass( "active" );
                $("div.item div.sevstyle:first-child").addClass("event1");
                $("div.item div.sevstyle:first-child").next().addClass("event2");
         });
    </script>
</html>
