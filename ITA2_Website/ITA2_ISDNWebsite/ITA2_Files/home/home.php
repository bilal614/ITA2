<script type="text/javascript">
    $(document).ready(function(){
        $("a.exploreNL").click(function () {
            $("#container").load("explore/explorenl.html");  });
        $("a.thingstodo").click(function () {
        $("#container").load("thingstodo/thingstodo.html");	}); 
        $("a.film").click(function () {
            $("#container").load("events/FilmFestival.html");  });
        $("a.pgallery").click(function () {
            $("#container").load("events/PortraitGallery.html");  });
    })
</script>
    <div id = "slogan">
        <p>What can you do in the Netherlands?</br>Find it here!!!</p>          
    </div>
    <div class="innercontainer">
        <div class="leftcolIndex">
            <div id="explore">
                <div class ="orangeLine"></div>
                <a class="exploreNL" href="#ExploreNL" >
                    <div class="desc">EXPLORE NETHERLANDS</div>
                <div>
                    <img id="explore" src="images/index/explore_pic.jpg"
                          alt="Explore NL" >
                </div>
                </a>
            </div>
            <div id="toDo">
                <div class ="orangeLine"></div>
                <a class="thingstodo" href="#Things to do" >
                    <div class="desc">THINGS TO DO</div>
                <div>
                    <img id="toDo" src="images/index/toDo_pic.jpg"
                          alt="Things To Do" >
                </div>
                </a>
            </div>
        </div>
        <div class="rightcolIndex">
            <div id="upcomingevents" class="desc">
                <div class ="orangeLine"></div>
                <div class="desc">Upcoming Events</div>
                <div class="eventsIndex">
                    <div>
                        <img id="upcomingevents" src="images/index/upcoming1.jpg"
                    alt="Upcoming Events" >
                    </div>
                    <div class = "eventTitle">
                        Netherlands Film Festival
                    </div>
                    <div class = "dateLocation">
                        23 Septemper in Utrecht
                    </div>
                    <a class = "buttonLink film" href="#">Read more...</a>
                </div>
                <div class = "greyLine">
                </div>
                <div class="eventsIndex">
                    <div>
                        <img id="upcomingevents" src="images/index/upcoming2.jpg"
                        alt="Upcoming Events">
                    </div>
                    <div class = "eventTitle">
                       Portrait Gallery
                    </div>
                    <div class = "dateLocation">
                        9 Nov - 31 Dec | Amsterdam
                    </div>
                    <a class = "buttonLink pgallery" href="#">Read more...</a>
                    <div class = "greyLine">
                </div>
            </div> <!--end div#upcomingevents-->
        </div><!--end div.rightcol!-->    
    </div><!--end div.innercontaine!-->
