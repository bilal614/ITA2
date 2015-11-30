<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
            $("#container").load("webpage/home/home.php");  });
        $("a.event").click(function () {
            $("#container").load("webpage/events/events.php");	}); 
        $("a.summer").click(function () {
            $("#container").load("webpage/events/summerEvents.php");	});
    })
</script>
<div id = "navLinkContainer">
    <div>
    </div>
    <div>
        <ul id="navLink">
            <li></li>
            <li class="preActive"><a class="home" href="#">Home</a><span></span></li>
            <li class="preActive"><a class="event" href="#">Events</a><span></span></li>
            <li class="preActive"><a class="summer" href="#">Summer events</a><span></span></li>
            <li class="activeLinkNav"><a href="">PinkPop</a><span></span></li>
        </ul>
    </div>
</div>
<div class="innercontainer">
    <div>
        <div class="eventPTitle">PINKPOP</div>
        <div class="greyline"></div>
        <div class="timeLocation"></div>
        <div class="eventPic"><img src="images/events/Summer/pinkPop.jpg"></div>
        <div class="orangeLineE"></div>
    </div>
   
    <div class="EventUpperRow">
         <ul class="mainpointsE">
            <li>Visit biggest open-air festival takes place in the city of Landgraaf</li>
            <li>Multi-day event with different stages </li>
        </ul>    
    </div>
    <div class="bottomEvent">
        <p class="subTitleEvent">PINKPOP Highlights</p>
        <p class="eventContent">The great line-up of musicians that have performed at PINKPOP  since it started in 1970 proves how special this festival is. Bruce Springsteen, the Foo Fighters, Fleetwood Mac, Dire Straits, Pearl Jam, Golden Earring, Red Hot Chili Peppers and many other artists have performed at PINKPOP. Apart from being Holland’s biggest outdoor festival, PINKPOP is also the longest-running  pop festival of its kind in the world.</p>
        <p class="subTitleEvent">Dance and Camp</p>
        <p class="eventContent">Another great feature of PINKPOP is that the festival area has a camping site that meets your needs and demands as well as those of 50.000 other campers. This makes it possible to dance and enjoy the best concerts while taking a nap in between.</p>   
    </div><!--end div.bottom-->
</div><!--end div.innercontainer-->