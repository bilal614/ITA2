<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
            $("#container").load("webpage/publicPages/home/home.php");  });
        $("a.summer").click(function () {
            $("#container").load("webpage/publicPages/events/summerEvents.php");	});
        $("a.autumn").click(function () {
            $("#container").load("webpage/publicPages/events/autumnEvents.php");	}); 
        $("a.winter").click(function () {
            $("#container").load("webpage/publicPages/events/winterEvents.php");	}); 
        $("a.spring").click(function () {
            $("#container").load("webpage/publicPages/events/springEvents.php");	});
        $("div.searchEvents").click(function () {
            $("#container").load("webpage/publicPages/events/searchForEvent.php");	});
    })
</script>
    <div id = "navLinkContainer">
        <div>
        </div>
        <div>
            <ul id="navLink">
                <li></li>
                <li class="preActive"><a href="">Home</a><span></span></li>
                <li class="activeLinkNav"><a href="">Events</a><span></span></li>
            </ul>
        </div>
    </div>
    <div class="innercontainer">
        <div class= "topCol">
            <div class="leftcol">
                <div id="summer" class="greybox">
                    <a class="summer" href="#" >                                    
                    <div><img class="medium" src="templates/images/events/summer.jpg"
                              alt="Summer"></div></a>
                    <div class="orangeLine"></div>
                    <div class="desc">Summer Events</div>
                </div>
            </div>
            <div class="rightcol" >
                <div id="spring" class="greybox">
                    <a class="spring" href="#" >

                    <div><img class="medium" src="templates/images/events/spring.jpg"
                          alt="Spring" ></div></a>
                    <div class="orangeLine"></div>
                    <div class="desc">Spring Events</div>
                </div>
            </div>
        </div>
        <div class= "botCol">
            <div class="leftcol">
                <div id="autumn" class="greybox" >
                    <a class="autumn" href="#" >
                    <div><img class="medium" src="images/events/autumn.jpg"
                          alt="Autumn"  ></div></a>
                    <div class="orangeLine"></div>
                    <div class="desc">Autumn Events</div>
                </div>
            </div><!--end div.bottomrightcol-->
            <div class="rightcol">
                <div id="winter" class="greybox" >
                    <a class="winter" href="#" >
                    <div><img class="medium" src="images/events/winter.jpg"
                          alt="Winter"  ></div></a>
                    <div class="orangeLine"></div>
                    <div class="desc">Winter Events</div>
                </div>
            </div><!--end div.bottomleftcol-->
        </div>
        <div id="searchButton" class="searchEvents">
            <a  id="searchEvent" href="#searchEvent">
            </a>
        </div>
    </div><!--end div.innercontainer-->

