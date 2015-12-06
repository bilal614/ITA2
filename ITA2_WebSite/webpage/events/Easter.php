<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
            $("#container").load("webpage/publicPages/home/home.php");  });
        $("a.event").click(function () {
            $("#container").load("webpage/publicPages/events/events.php");	}); 
        $("a.spring").click(function () {
            $("#container").load("webpage/publicPages/events/springEvents.php");	});
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
            <li class="preActive"><a class="spring" href="#">Spring events</a><span></span></li>
            <li class="activeLinkNav"><a href="">Easter</a><span></span></li>
        </ul>
    </div>
</div>
<div class="innercontainer">
    <div>
        <div class="eventPTitle">Easter in Netherlands</div>
        <div class="greyline"></div>
        <div class="timeLocation"></div>
        <div class="eventPic"><img src="templates/images/events/Spring/SpringEaster.jpg"></div>
        <div class="orangeLineE"></div>
    </div>
   
    <div class="EventUpperRow">
         <ul class="mainpointsE">
            <li>Visit Holland during Easter</li>
            <li>Visit a festival during Easter weekend</li>
            <li>Listen to the Matthäus Passion at a beautiful concert hall</li>
        </ul>    
    </div>
    <div class="bottomEvent">
         <p class="eventContent">If you want to come to Holland this spring, Easter weekend is a wonderful moment. This is when temperatures start rising and terraces are set up outside, the flower-bulb fields are in bloom, and there are many great traditions to discover.</p>
        <p class="subTitleEvent">Easter events</p>
        <p class="eventContent">In addition to traditional Easter activities with the family, many Easter festivals are organised in Holland. One such festival is Paaspop, a three-day music event in Schijndel (Noord-Brabant) that has drawn a huge audience to hear dozens of bands perform on several stages each year since 1978. You could also go see the ‘Easter races’ on the Zandvoort race track, which mark the beginning of the national racing season.</p>
        <p class="subTitleEvent">Music</p>
        <p class="eventContent">Easter is closely linked with the Matthäus Passion! If you are in one of the big cities during Easter, you should really visit one of the wonderful concert halls at which this extraordinary piece of music is performed. It will make for an impressive experience!</p>   
    </div><!--end div.bottom-->
</div><!--end div.innercontainer-->