<script type="text/javascript">
        $(document).ready(function(){
            $("a.home").click(function () {
                $("#container").load("webpage/publicPages/home/home.php");  });
            $("a.thingstodo").click(function () {
            $("#container").load("webpage/publicPages/thingstodo/thingstodo.php");	}); 
        })
</script>
<div id = "navLinkContainer">
    <div>
    </div>
    <div>
        <ul id="navLink">
            <li></li>
            <li class="preActive"><a class="home" href="#Home">Home</a><span></span></li>
            <li class="preActive"><a class ="thingstodo"href="#Things to do">Things to do</a><span></span></li>
            <li class="activeLinkNav"><a href="">Food</a><span></span></li>
        </ul>
    </div>
</div>
<div class="Foodcontainer">
    <div id="titleContainer">
        <div id="foodTitle">Restaurants in the Netherlands</div>
        <div id="greyline"></div>
        <div class="fooddesc">Holland is a wonderful country, not least in terms of culinary enjoyment. Every city boasts fantastic restaurants that serve great food for every budget. Here, you will find our selection of best restaurants in each region or city. Discover the flavors of Holland and enjoy the culinary surprises!</div>
    </div>
    <div id="FoodUpperRow">
    <div class="leftcolFood">
        <div id="AmstRest" class="picLink" >
            <a href="#" >
            <div class="RestPicLink"><img class="medium" 
                                          src="templates/images/thingstodo/AmsterdamRest.jpg"
                  alt="Amsterdam Restaurants" ></div></a>
            <div class="orangeLine"></div>
            <div class="RestDesc">10x Restaurants in Amsterdam</div>
            <p class="RestDetails">Discover the best restaurants in Amsterdam.</p>
            <div class="readMore"><a href="http://www.holland.com/us/tourism/interests/food-6/restaurants-in-holland/restaurants-in-amsterdam-2.htm"  target="_blank" >READ MORE</a></div>
        </div>
    </div>
    <div class="rightcolFood">
        <div id="RotRest" class="picLink" >
            <a href="#" >
            <div class="RestPicLink"><img class="medium" 
                                          src="templates/images/thingstodo/RotterdamRest.jpg"
                  alt="Rotterdam Restaurants" ></div></a>
            <div class="orangeLine"></div>
            <div class="RestDesc">10x Restaurants in Rotterdam</div>
            <p class="RestDetails">Discover friendly and flavorful restaurants in 
                Rotterdam.</p>
            <div class="readMore"><a href="http://www.holland.com/us/tourism/interests/food-6/restaurants-in-holland/restaurants-in-rotterdam.htm" target="_blank">READ MORE</a></div>
        </div>
    </div>
    </div>
    <div class="bottomFood">
            <div class="firstCol">
                <div id="EindRest" class="picLink" >
                    <a href="#" >
                    <div class="RestPicLink"><img class="small" 
                                                  src="templates/images/thingstodo/EindhovenRest.jpg"
                    alt="Eindhoven Restaurants" ></div></a>
                        <div class="RestDesc">5x Restaurants in Eindhoven</div>
                    <p class="RestDetails">Explore the exuberant city of Eindhoven with its 
                    many fantastic restaurants.</p>
                    <div class="readMore"><a href="http://www.holland.com/us/tourism/article/top-5-restaurants-in-eindhoven-1.htm" target="_blank">READ MORE</a></div>
                </div>
            </div>
            <div class="secondCol">
                <div id="UtrRest" class="picLink" >
                    <a href="#" >
                    <div class="RestPicLink"><img class="small" 
                                                  src="templates/images/thingstodo/Utrecht.jpg"
                    alt="Utrecht Restaurants" ></div></a>
                    <div class="RestDesc">10x Restaurants in Utrecht</div>
                    <p class="RestDetails">Discover the list of best restaurants in the 
                        magnificent city of Utrecht.</p>
                    <div class="readMore"><a href="http://www.holland.com/us/tourism/interests/food-6/restaurants-in-holland/restaurants-in-utrecht-2.htm" target="_blank">READ MORE</a></div>
                </div>
            </div>
            <div class="thirdCol">
                <div id="HaagRest" class="picLink" >
                    <a href="#" >
                    <div class="RestPicLink"><img class="small" 
                                                  src="templates/images/thingstodo/HagueRest.jpg"
                    alt="Den Haag Restaurants" ></div></a>
                    <div class="RestDesc">10x Restaurants in The Hague</div>
                    <p class="RestDetails">Discover the greatest restaurants in the lovely 
                        city of The Hague.</p>
                    <div class="readMore"><a href="http://www.holland.com/us/tourism/interests/food-6/restaurants-in-holland/restaurants-in-den-haag-2.htm" target="_blank" >READ MORE</a></div>
                </div>
            </div>
    </div><!--end div.bottomCulture-->
</div><!--end div.Culturecontainer-->
    
