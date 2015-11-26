<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
            $("#container").load("webpage/home/home.php");  });
        $("a.event").click(function () {
            $("#container").load("webpage/events/events.php");	}); 
        $("a.autumn").click(function () {
            $("#container").load("webpage/events/autumnEvents.php");	});
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
            <li class="preActive"><a class="autumn" href="#">Autumn events</a><span></span></li>
            <li class="activeLinkNav"><a href="">Film Festival</a><span></span></li>
        </ul>
    </div>
</div>
<div class="innercontainer">
    <div>
        <div class="eventPTitle">International Film Festival</div>
        <div class="greyline"></div>
        <div class="timeLocation"></div>
        <div class="eventPic"><img src="images/events/Autumn/autumn5.jpg"></div>
        <div class="orangeLineE"></div>
    </div>
   
    <div class="EventUpperRow">
         <ul class="mainpointsE">
            <li>Visit the International Film Festival Rotterdamr</li>
            <li>Cinema and Awards</li>
        </ul>    
    </div>
    <div class="bottomEvent">
         <p class="eventContent">The International Film Festival Rotterdam defines it unique character by focusing on new, innovative, independent films and film makers. The festival is a mixture of cinema, film-related visual art exhibitions and live performances.</p>
        <p class="subTitleEvent">Cinema and Awards</p>
        <p class="eventContent">Hundreds of film makers and other artists present their work to a large audience in Rotterdam every year. Twelve days in a row, twenty-four screening venues are fully programmed. The festival attracts many interested visitors, plus up to 3000 press and film industry representatives.
The highlight of the International Film Festival are the VPRO Tiger Awards. Not the established film makers, but new talent receive awards for their promising work. The awards are an important encouragement for young directors.</p>
        <p class="subTitleEvent">Film Makers of the Future</p>
        <p class="eventContent">The International Film Festival Rotterdam offers you a great opportunity to enjoy the work of talented film makers of the future. The real film lovers can even mingle and chat with the representatives of the film industry. 
</p>   
    </div><!--end div.bottom-->
</div><!--end div.innercontainer-->