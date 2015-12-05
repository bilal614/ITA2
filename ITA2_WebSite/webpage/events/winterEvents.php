<link rel="stylesheet" 
      href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
                    $("#container").load("webpage/publicPages/home/home.php");  });
        $("a.event").click(function() {
                    $("#container").load("webpage/publicPages/events/events.php"); });
        $("div.light").click(function () {
            $("#container").load("webpage/publicPages/events/LightFestival.php");  });
        $("div.newYear").click(function () {
            $("#container").load("webpage/publicPages/events/NewYear.php");  });
    })
</script>   
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
              <a href="#Light"><img src="templates/images/events/Winter/winter3.jpg" alt="Light" ></a>
            <div class="classCaption" class="Desc">
                <div class="captionTitle">Amsterdam Light Festival</div>
                <div class="timeLocation">27 Nov-1 Feb  | Amsterdam</div>
                <div class="eventContentD">Discover the loveliest light art at Amsterdam Light Festival.</div>
            </div>
          </div>
          <div class="item newYear">
              <a href="#Scheveningen"><img src="templates/images/events/Winter/winter1.jpg" alt="Scheveningen" 
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
