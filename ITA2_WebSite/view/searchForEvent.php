<?php 
    session_start();
    include '../includes/common.inc.php';
?>
<link rel="stylesheet" 
href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src = "jquery/jquery-2.1.4.min.js" type="text/javascript"/></script>
<script src="jquery/jquery-2.1.4.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#eventResult").hide();
        $( "#searchEventBtn" ).click(function() {
            $( "#eventResult" ).show( "slow" );
        });
    })
</script>

<!DOCTYPE html>
<html>
    <?php displayHeadTag();?>
    <body>  
        <div id="mainContainer">
            <?php
                displayHeader();
            ?>
            <div id="container">
                <div class ="mainNav">
                    <ul>
                    </ul>
                </div>
                <div class="innercontainer">
                   <div id="searchBox">
                        <div class="eventPTitle">Search for events</div>
                        <div class="greyline"></div>
                       <form id="seachForm">
                           <div>
                                <label>Location</label>
                                <select>
                                    <option value="Amsterdam">Amsterdam</option>
                                    <option value="Rotterdam">Rotterdam</option>
                                    <option value="The Hague">The Hague</option>
                                    <option value="Utrecht">Utrecht</option>
                                </select>
                           </div>
                           <div>
                                <label>Date</label>
                                <input type="date" name="bday">
                           </div> 
                           <div>
                                <input id="searchEventBtn" type="" name="submit" value="Submit" class="submit-button" />
                           </div>
                       </form>
                   </div><!--end di#searchBox-->
                   <div id="eventResult">
                    <!----put carousel here!--->
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

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
                </div><!--End dive#eventresult-->
                </div><!--end div.innercontainer-->
            </div><!--End #container-->
            <?php
            displayFooter();
            ?>
        </div>
    </body>
</html>         
