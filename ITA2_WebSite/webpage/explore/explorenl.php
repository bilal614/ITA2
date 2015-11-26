  
<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
            $("#container").load("webpage/home/home.html");  });
        $("a.explorenl").click(function () {
            $("#container").load("webpage/explore/explorenl.html");	}); 
        $("a.culture").click(function () {
            $("#container").load("webpage/explore/culture.html");    });    
        $("a.transport").click(function () {
            $("#container").load("webpage/explore/publictransport.html");    });    
        $("a.weather").click(function () {
            $("#container").load("webpage/explore/weather.html");    });  
    })
</script>
<div id = "navLinkContainer">
    <div>
    </div>
    <div>
        <ul id="navLink">
            <li></li>
            <li class="preActive"><a class="home" href="#home">Home</a><span></span></li>
            <li class="activeLinkNav"><a  href="#">Explore NL</a><span></span></li>
        </ul>
    </div>
</div>
<div class="innercontainer">
    <div class="topCol">
        <div class="leftcol">
            <div id="culture" class="greybox" >
                <a class="culture" href="#" >
                <div><img class="medium" src="images/explore/culture.jpg"
                          alt="Food"></div>
                </a>
                <div class="orangeLine"></div>
                <div class="desc">Culture</div>
            </div>
        </div>
        <div class="rightcol">
            <div id="weather" class="greybox">
                <a class="weather" href="#" >
                <div><img class="medium"  src="images/explore/weather.jpg"
                      alt="Shopping" ></div></a>
                <div class="orangeLine"></div>
                <div class="desc">Weather</div>
            </div>
        </div>  
    </div>
    <div class="bottomcol">
        <div id="publictransport" class="greybox" >
            <a class="transport" href="#" >
            <div><img class="large" src="images/explore/publictransport.png"
                  alt="Cycling"  ></div></a>
            <div class="orangeLine"></div>
             <div class="desc">Public Transport</div>
        </div>
    </div><!--end div.bottomcol-->
</div><!--end div.innercontainer-->

