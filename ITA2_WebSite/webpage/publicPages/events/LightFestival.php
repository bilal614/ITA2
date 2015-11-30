<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
            $("#container").load("webpage/publicPages/home/home.php");  });
        $("a.event").click(function () {
            $("#container").load("webpage/publicPages/events/events.php");	}); 
        $("a.winter").click(function () {
            $("#container").load("webpage/publicPages/events/winterEvents.php");	});
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
            <li class="preActive"><a class="winter" href="#">Winter events</a><span></span></li>
            <li class="activeLinkNav"><a href="">Light Festival</a><span></span></li>
        </ul>
    </div>
</div>
<div class="innercontainer">
    <div>
        <div class="eventPTitle">Amsterdam Light Festival</div>
        <div class="greyline"></div>
        <div class="timeLocation"></div>
        <div class="eventPic"><img src="templates/images/events/Winter/winter4.jpg"></div>
        <div class="orangeLineE"></div>
    </div>
   
    <div class="EventUpperRow">
         <ul class="mainpointsE">
            <li>The best light artists from Holland </li>
            <li>The beautiful works along the Amstel river or the old canals in the city centre</li>
        </ul>    
    </div>
    <div class="bottomEvent">
         <p class="eventContent">If you want to come to Holland this spring, Easter weekend is a wonderful moment. This is when temperatures start rising and terraces are set up outside, the flower-bulb fields are in bloom, and there are many great traditions to discover.</p>
        <p class="subTitleEvent">Spectacular boat parade</p>
        <p class="eventContent">In the longest nights the centre of Amsterdam lights up brightly. Board one of the boats decorated with light and take a tour past the many unique light installations. You can also visit several beautifully lit canal houses.</p>
        <p class="subTitleEvent">Christmas Canal Parade</p>
        <p class="eventContent">Dozens of boats decked out with spectacular lights sail through the canals past fairy scenes in the Christmas Canal Parade. A number of choirs along the way reinforce the intimate Christmas mood. In short, it is an exciting experience that brings Christmas cheer to your stay in Amsterdam.</p>   
    </div><!--end div.bottom-->
</div><!--end div.innercontainer-->