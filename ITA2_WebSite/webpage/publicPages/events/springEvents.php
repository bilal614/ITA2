<link rel="stylesheet" 
      href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
                    $("#container").load("webpage/home/home.php");  });
        $("a.event").click(function() {
                    $("#container").load("webpage/events/events.php"); });
        $("div.Keukenhof").click(function () {
            $("#container").load("webpage/events/Keukenhof.php");  });
        $("div.Easter").click(function () {
            $("#container").load("webpage/events/Easter.php");  });
    })
</script>
    
<div id = "navLinkContainer">
<div></div>
    <div>
        <ul id="navLink">
            <li></li>
            <li class="preActive"><a class="home" href="#Home">Home</a><span></span></li>
            <li class="preActive"><a class="event" href="#events">Events</a><span></span></li>
            <li class="activeLinkNav"><a href="#">Spring Events</a><span></span></li>
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

          <div class="item active Keukenhof">
              <a class="" href="#Keukenhof"><img  src="images/events/Spring/spring3.jpg" alt="Keukenhof" ></a>
            <div class="classCaption" class="Desc">
                <div class="captionTitle">Keukenhof</div>
                <div class="timeLocation">24 Mar-16 May  | Lisse</div>
                <div class="eventContentD">The best place to see tulips in Holland is Keukenhof. Keukenhof is a park with 7 million flower bulbs surrounded by tulip fields.</div>
            </div>
          </div>
          <div class="item Easter">
              <a href="#Easter"><img src="images/events/Spring/SpringEaster.jpg" alt="Easter" 
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
