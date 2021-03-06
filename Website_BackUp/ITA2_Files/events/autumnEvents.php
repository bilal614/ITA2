<link rel="stylesheet" 
      href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
                    $("#container").load("home/home.php");  });
        $("a.event").click(function() {
                    $("#container").load("events/events.php"); });
        $("div.film").click(function () {
            $("#container").load("events/FilmFestival.php");  });
        $("div.pgallery").click(function () {
            $("#container").load("events/PortraitGallery.php");  });
    })
</script>    
<div id = "navLinkContainer">
<div></div>
    <div>
        <ul id="navLink">
            <li></li>
            <li class="preActive"><a class= "home" href="#home">Home</a><span></span></li>
             <li class="preActive"><a class="event" href="#events">Events</a><span></span></li>
            <li class="activeLinkNav"><a href="#">Autumn events</a><span></span></li>
            
        </ul>
    </div>
</div>
<div class="innercontainer">
<div class="eventPTitle">Autumn events</div>
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

          <div class="item active film">
              <a href="#Film"><img src="images/events/Autumn/autumn5.jpg" alt="Film"></a>
            <div class="classCaption" class="Desc">
                <div class="captionTitle">Netherlands Film Festival</div>
                <div class="timeLocation">23 Sept| Utrecht</div>
                <div class="eventContentD">Watch a large variety of Dutch movies at the Netherlands Film Festival in Utrecht. From very famous to truly obscure and from features and documentaries to short films and TV…</div>
            </div>
          </div>
          <div class="item pgallery">
              <a href="#"><img src="images/events/Autumn/autumn4.jpg" alt="Portrait" ></a>
                <div class="classCaption" class="Desc">
                    <div class="captionTitle">Portrait Gallery</div>
                    <div class="timeLocation">9 Nov - 31 Dec | Amsterdam</div>
                    <div class="eventContentD">Thirty huge 17th-century group portraits from the collections of the Amsterdam Museum and the Rijksmuseum can be admired in Hermitage Amsterdam until the end of 2016…</div>
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
