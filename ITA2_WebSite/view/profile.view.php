<!DOCTYPE html>
<html>
   
    <?php displayHeadTag();?>

    <body>
        <div id="mainContainer">
        <?php displayHeader()?>     
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
        <?php
             displayFooter();
        ?>
    </div><!--end div#mainContainer!-->
        
    </body>
</html>