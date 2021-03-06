<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
            $("#container").load("home/home.php");  });
        $("a.thingstodo").click(function () {
            $("#container").load("thingstodo/thingstodo.php");	});
        $("a.food").click(function () {
            $("#container").load("thingstodo/food.php");	}); 
        $("a.shopping").click(function () {
            $("#container").load("thingstodo/shopping.php");	}); 
        $("a.cycling").click(function () {
            $("#container").load("thingstodo/cycling.php");	}); 
    })
</script>
<div id = "navLinkContainer">
    <div>
    </div>
    <div>
        <ul id="navLink">
            <li></li>
            <li class="preActive"><a class = "home" href="#HomePage">Home</a><span></span></li>
            <li class="activeLinkNav"><a href="#">Things to do</a><span></span></li>
        </ul>
    </div>
</div>
<div class="innercontainer">
    <div class="topCol">
        <div class="leftcol">
            <div id="food" class="greybox" >
                <a class="food" href="#" >
                <div><img class="medium" src="images/thingstodo/food.jpg"
                          alt="Food"></div>
                </a>
                <div class="orangeLine"></div>
                <div class="desc">Food</div>
            </div>
        </div>
        <div class="rightcol">
            <div id="shopping" class="greybox">
                <a class="shopping"href="#" >
                <div><img class="medium" src="images/thingstodo/shopping.jpg"
                      alt="Shopping" ></div></a>
                <div class="orangeLine"></div>
                <div class="desc">Shopping</div>
            </div>
        </div>  
    </div>
    <div class="bottomcol">
        <div id="cycling" class="greybox" >
            <a class="cycling" href="#" >
            <div><img class="large" src="images/thingstodo/cycling.jpg"
                  alt="Cycling"  ></div></a>
            <div class="orangeLine"></div>
            <div class="desc">Cycling</div>
        </div>
    </div><!--end div.bottomcol-->
</div><!--end div.innercontainer-->
  