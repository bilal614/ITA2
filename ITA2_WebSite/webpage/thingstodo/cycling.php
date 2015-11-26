<script type="text/javascript">
            $(document).ready(function(){
                $("a.home").click(function () {
                    $("#container").load("webpage/home/home.php");  });
                $("a.thingstodo").click(function () {
                $("#container").load("webpage/thingstodo/thingstodo.php");	}); 
            })
</script>
<div id = "navLinkContainer">
    <div>
    </div>
    <div>
        <ul id="navLink">
            <li></li>
            <li class="preActive"><a class="home" href="#Home">Home</a><span></span></li>
            <li class="preActive"><a class="thingstodo" href="#Things to do">Things to do</a><span></span></li>
            <li class="activeLinkNav"><a href="">Cycling</a><span></span></li>
        </ul>
    </div>
</div>
<div class="Cyclingcontainer">
    <div id="titleContainer">
        <div id="cycTitle">Cycling in the Netherlands</div>
        <div id="greyline"></div>
        <div class="cyclingPic"><img class="large" src="images/thingstodo/cycling.jpg"></div>
    </div>
    <div id="CycUpperRow">
        <p >10 Reasons to explore Holland by bicycle</p>
    </div>
    <div id="bottomCyc">
        <ol id="cycle">
            <li>Holland boasts 30,000 km worth of bicycle networks (junction 
                network, LF routes)</li>
            <li>Road signs have been perfected so it is virtually impossible for a 
                cyclist to get lost</li>
            <li>There are over 32,000 kilometres of safe cycle paths, mostly 
                separated from motorised traffic</li>
            <li>The Dutch are used to cyclists and pay attention to them in 
                traffic</li>
            <li>Holland is a flat country, so even untrained cyclists will find it 
                easy to travel the routes</li>
            <li>Holland has a mild climate so it is rarely too hot or too cold to 
                ride a bicycle</li>
            <li>You will see the most beautiful spots that are otherwise hidden; the 
                junction network takes you to roads and paths inaccessible to 
                motorised vehicles</li>
            <li>Cycling is a green means of transport so you’ll contribute to a 
                sustainable society</li>
            <li>Holland is in the top 5 countries in the world for road safety</li>
            <li>It is good for your health!</li>
        </ol>    
        </br>
    <p id="cycPara">In short, the bicycle is the perfect means of transport if you want to 
        see Holland at its best. If you don’t own a bicycle or cannot take one with 
        you, you can rent bicycles pretty much everywhere</p>
    </div><!--end div.bottom-->
</div><!--end div.cyclingcontainer-->
