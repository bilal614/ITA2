<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
            $("#container").load("home/home.php");  });
        $("a.event").click(function () {
            $("#container").load("events/events.php");	}); 
        $("a.summer").click(function () {
            $("#container").load("events/summerEvents.php");	});
    })
</script>
<div id = "navLinkContainer">
    <div>
    </div>
    <div>
        <ul id="navLink">
            <li></li>
            <li class="preActive"><a class="home" href="#Home">Home</a><span></span></li>
            <li class="preActive"><a class="event" href="#Events">Events</a><span></span></li>
            <li class="preActive"><a class="summer" href="#Summer Events">Summer events</a><span></span></li>
            <li class="activeLinkNav"><a href="">King's Day</a><span></span></li>
        </ul>
    </div>
</div>
<div class="innercontainer">
    <div>
        <div class="eventPTitle">King's Day in the Netherlands</div>
        <div class="greyline"></div>
        <div class="timeLocation"></div>
        <div class="eventPic"><img src="images/events/Summer/kingsDay.jpg"></div>
        <div class="orangeLineE"></div>
    </div>
   
    <div class="EventUpperRow">
         <ul class="mainpointsE">
            <li>Get your orange outfit on and celebrate King’s Day with us in Holland on 27 April!</li>
            <li>Celebrate King’s Day in Amsterdam, Utrecht, The Hague or Eindhoven!</li>
            <li>Enjoy the spectacular attractions at one of the many funfairs!</li>
        </ul>    
    </div>
    <div class="bottomEvent">
        <p class="subTitleEvent">King’s Day in the entire country</p>
        <p class="eventContent">On 27 April, all of Holland is a party! From the biggest cities down to the smallest hamlets, the entire country celebrates King’s Day. There are street markets everywhere, where people sell all kinds of miscellany and (home-made) treats. Bands are playing on every street corner, every pub is serving beer outside and all around, people are dancing in their orange outfits. Tradition dictates that the Royal family visits one or two municipalities in Holland on this day, so with any luck, you might see them yourself!</p>
         <p class="subTitleEvent">King’s Day in Amsterdam</p>
        <p class="eventContent"> King’s Day is certainly celebrated with tremendous exuberance in the capital of Holland, Amsterdam. Activities abound throughout the city; there is a huge street market of rugs and stalls where people sell all kinds of items and others show off artistic skills. The canals are thronged with boats with partying people, and for those who like a good dance, there are plenty large parties with famous DJs.</p>
        <p class="subTitleEvent">King’s Day in Eindhoven</p>
        <p class="eventContent"> Eindhoven has a score of entertaining shows for you to enjoy on its squares the evening before King’s Day: on Wilhelminaplein, Stationsplein and Stadhuisplein. King’s Day itself is especially enjoyable, with street markets around Mathildelaan, Strijp-S and the squares we just named.</p>   
    </div><!--end div.bottom-->
</div><!--end div.innercontainer-->