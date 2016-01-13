<?php 
    session_start();
    include '../includes/common.inc.php';
    include '../view/event.view.php';
    require_once '../model/User.class.php';
    $email=$_SESSION['userEmail'];
    $user = User::getUserAccount($email);
    $user->getFavorites();
    $favEvnts = $user->getAllFavoriteEvents();
    
    function displayEvent()
    {
        if($_SESSION['autumn']) {
            displayAutumn();
        }
        if($_SESSION['summer']){
            displaySummer();
        }
        if($_SESSION['winter']) {
            displayWinter();
        }
        if($_SESSION['spring']){
            displaySummer();
        }
    }
    
    function displayAutumn()
    {
        ?>
                <div id = "navLinkContainer">
                    <div></div>
                    <div>
                        <ul id="navLink">
                            <li></li>
                            <li class="preActive"><a class= "home" href="../index.php">Home</a><span></span></li>
                            <li class="preActive"><a class="event" href="events.php">Events</a><span></span></li>
                            <li class="activeLinkNav"><a href="autumnEvents.php">Autumn events</a><span></span></li>
                        </ul>
                    </div>
                </div>
                <div class="innercontainer">
                <div class="eventPTitle">Autumn events</div>
                <div class="greyline"></div>
                <div> 
                    <!----put carousel here!--->
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
<!--                         Indicators 
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>-->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                          <div class="item active film">
                            <a href="#Film"><img src="../templates/images/events/Autumn/autumn5.jpg" alt="Film"></a>
                            <div class="classCaption" class="Desc">
                                <div class="captionTitle">Netherlands Film Festival</div>
                                <div class="timeLocation">23 Sept| Utrecht</div>
                                <div class="eventContentD">Watch a large variety of Dutch movies at the Netherlands Film Festival in Utrecht. From very famous to truly obscure and from features and documentaries to short films and TV…</div>
                                <div class ="addFavorite">
                                    <?php 
                                    global $favEvnts;
                                    if(!in_array('7', $favEvnts)){ ?>
                                    <a onclick="return loadingRequest('7');">Add to favorite events</a>
                                    <?php } ?>
                                    <span></span>
                                </div>
                            </div>
                          </div>
                          <div class="item pgallery">
                              <a href="#"><img src="../templates/images/events/Autumn/autumn4.jpg" alt="Portrait" ></a>
                                <div class="classCaption" class="Desc">
                                    <div class="captionTitle">Portrait Gallery</div>
                                    <div class="timeLocation">9 Nov - 31 Dec | Amsterdam</div>
                                    <div class="eventContentD">Thirty huge 17th-century group portraits from the collections of the Amsterdam Museum and the Rijksmuseum can be admired in Hermitage Amsterdam until the end of 2016…</div>
                                    <div class ="addFavorite">
                                    <a onclick="return loadingRequest('8');">Add to favorite events</a>
                                    <span></span>
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
                    </div>
                </div><!--end div.UpperRow!--->
                </div><!--end div#innercontainer-->
        <?php
    }
    
    function displaySummer()
    {
        ?>
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
        <?php
    }
    
     function displaySpring()
    {
        ?>
                <div id = "navLinkContainer">
                <div></div>
                    <div>
                        <ul id="navLink">
                            <li></li>
                            <li class="preActive"><a class="home" href="../index.php">Home</a><span></span></li>
                            <li class="preActive"><a class="event" href="events.php">Events</a><span></span></li>
                            <li class="activeLinkNav"><a href="springEvents.php">Spring Events</a><span></span></li>
                        </ul>
                    </div>
                </div>
                <div class="innercontainer">
                <div class="eventPTitle">Spring event</div>
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

                          <div class="item active Keukenhof">
                              <a class="" href="#Keukenhof"><img  src="../templates/images/events/Spring/spring3.jpg" alt="Keukenhof" ></a>
                            <div class="classCaption" class="Desc">
                                <div class="captionTitle">Keukenhof</div>
                                <div class="timeLocation">24 Mar-16 May  | Lisse</div>
                                <div class="eventContentD">The best place to see tulips in Holland is Keukenhof. Keukenhof is a park with 7 million flower bulbs surrounded by tulip fields.</div>
                            </div>
                          </div>
                          <div class="item Easter">
                              <a href="#Easter"><img src="../templates/images/events/Spring/SpringEaster.jpg" alt="Easter" 
                                                          ></a>
                                <div class="classCaption" class="Desc">
                                    <div class="captionTitle">Easter In Holland</div>
                                    <div class="timeLocation">27-28 Mar | Netherlands tranditional events</div>
                                    <div class="eventContentD">Have Easter breakfast or a lovely brunch, attend a beautiful performance of the Matthäus Passion or spend some time strolling past the many stands at one of the Easter markets. Visit Holland during Easter and discover the many things to do.</div>
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
        <?php
    }
        function displayWinter()
        {
        ?>
                <div id = "navLinkContainer">
                <div></div>
                    <div>
                        <ul id="navLink">
                            <li></li>
                            <li class="preActive"><a class="home" href="#">Home</a><span></span></li>
                            <li class="preActive"><a class="events" href="#">Events</a><span></span></li>
                            <li class="activeLinkNav"><a href="#">Winter Events</a><span></span></li>
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

                          <div class="item active light">
                              <a href="#Light"><img src="../templates/images/events/Winter/winter3.jpg" alt="Light" ></a>
                            <div class="classCaption" class="Desc">
                                <div class="captionTitle">Amsterdam Light Festival</div>
                                <div class="timeLocation">27 Nov-1 Feb  | Amsterdam</div>
                                <div class="eventContentD">Discover the loveliest light art at Amsterdam Light Festival.</div>
                            </div>
                          </div>
                          <div class="item newYear">
                              <a href="#Scheveningen"><img src="../templates/images/events/Winter/winter1.jpg" alt="Scheveningen" 
                                                           ></a>
                                <div class="classCaption" class="Desc">
                                    <div class="captionTitle">Scheveningen New Year's Dive</div>
                                    <div class="timeLocation">1 Jan | Netherlands tranditional festival</div>
                                    <div class="eventContentD">The new year’s dive is cold, bold and the best way to start the year fresh. </div>
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
        <?php
    }
