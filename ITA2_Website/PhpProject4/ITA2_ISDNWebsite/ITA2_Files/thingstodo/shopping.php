   <script type="text/javascript">
            $(document).ready(function(){
                $("a.home").click(function () {
                    $("#container").load("home/home.php");  });
                $("a.thingstodo").click(function () {
                $("#container").load("thingstodo/thingstodo.php");	}); 
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
                    <li class="activeLinkNav"><a href="">Shopping</a><span></span></li>
                </ul>
            </div>
        </div>
        <div class="Shoppingcontainer">
            <div id="titleContainer">
                <div id="shopTitle">Shopping in the Netherlands</div>
                <div id="greyline"></div>
                <div class="shopdesc">If you plan to visit one of the big cities in Holland, you are probably thinking of excellent museums, special architecture and good restaurants. In practice, however, many people like to fit in an afternoon of shopping as well. While one person likes fashion, shoes and jewelry, another loves art and design and yet another prefers literature and music. Fortunately Holland has countless special shops for each of them. And in many big cities, the shops are open on Sunday as well.</div>
            </div>
            <div id="ShopUpperRow">
            <div class="leftcolShop">
                <div id="AmstShop" class="picLink" >
                    <a href="#" >
                    <div class="ShopPicLink"><img class="medium" 
                          src="images/thingstodo/shopping/amsterdam.jpg"
                          alt="Amsterdam Shops" ></div></a>
                    <div class="orangeLine"></div>
                    <div class="ShopDesc">Shopping in Amsterdam</div>
                    <p class="ShopDetails">From department stores to designer shops: 
                        Amsterdam has it all.</p>
                    <div class="readMore"><a href="http://www.holland.com/us/tourism/cities/amsterdam/shopping-in-amsterdam-2.htm" target="_blank">READ MORE</a></div>
                </div>
            </div>
            <div class="rightcolShop">
                <div id="RotShop" class="picLink" >
                    <a href="#" >
                    <div class="ShopPicLink"><img class="medium" 
                          src="images/thingstodo/shopping/rotterdam.jpg"
                          alt="Rotterdam Shops"  ></div></a>
                    <div class="orangeLine"></div>
                    <div class="ShopDesc">Shopping in Rotterdam</div>
                    <p class="ShopDetails">Go to Rotterdam for the best design shops.</p>
                    <div class="readMore"><a href="http://www.holland.com/us/tourism/cities/rotterdam-1/shopping-in-rotterdam-1.htm" target="_blank">READ MORE</a></div>
                </div>
            </div>
            </div>
            <div id="bottomShop">
                    <div class="firstshopCol">
                        <div id="MasShop" class="picLink" >
                            <a href="#" >
                            <div class="ShopPicLink"><img class="medium" 
                            src="images/thingstodo/shopping/maastricht.jpg"
                            alt="Maastricht Shops" ></div></a>
                            <div class="orangeLine"></div>
                            <div class="ShopDesc">Shopping in Maastricht</div>
                            <p class="ShopDetails">Pleasant shopping in a well-structured 
                                centre: find your way to Maastricht.</p>
                            <div class="readMore"><a href="http://www.holland.com/us/tourism/cities/maastricht-1/shopping-in-maastricht-2.htm" target="_blank">READ MORE</a></div>
                        </div>
                    </div>
                    <div class="secondshopCol">
                        <div id="UtrShop" class="picLink" >
                            <a href="#" >
                            <div class="ShopPicLink"><img class="medium" 
                            src="images/thingstodo/shopping/utrecht.jpg"
                            alt="Utrecht Shops"  ></div></a>
                            <div class="orangeLine"></div>
                            <div class="ShopDesc">Shopping in Utrecht</div>
                            <p class="ShopDetails">Shopping at the Hoog Catharijne mall or 
                                more peacefully around the canals.</p>
                            <div class="readMore"><a href="http://www.holland.com/us/tourism/cities-in-holland/utrecht-1/shopping-in-utrecht-1.htm" target="_blank">READ MORE</a></div>
                        </div>
                    </div>
            </div><!--end div.bottomCulture-->
        </div><!--end div.Culturecontainer-->
 