<!DOCTYPE html>
<html>
    <?php include 'headTag.inc.php'?>
    <body>  
        <div id="mainContainer">
            <?php
                include 'header.inc.php';
            ?>
            <div id="container">
               <div id = "navLinkContainer">
                    <div>
                    </div>
                    <div>
                        <ul id="navLink">
                            <li></li>
                            <li class="preActive"><a class = "home" href="../index.php">Home</a><span></span></li>
                            <li class="activeLinkNav"><a href="thingstodo.php">Things to do</a><span></span></li>
                        </ul>
                    </div>
                </div>
                <div class="innercontainer">
                    <div class="topCol">
                        <div class="leftcol">
                            <div id="food" class="greybox" >
                                <a class="food" href="food.php" >
                                    <div><img class="medium" src="../templates/images/thingstodo/food.jpg"
                                          alt="Food"></div>
                                </a>
                                <div class="orangeLine"></div>
                                <div class="desc">Food</div>
                            </div>
                        </div>
                        <div class="rightcol">
                            <div id="shopping" class="greybox">
                                <a class="shopping"href="shopping.php" >
                                    <div><img class="medium" src="../templates/images/thingstodo/shopping.jpg"
                                      alt="Shopping" ></div></a>
                                <div class="orangeLine"></div>
                                <div class="desc">Shopping</div>
                            </div>
                        </div>  
                    </div>
                    <div class="bottomcol">
                        <div id="cycling" class="greybox" >
                            <a class="cycling" href="cycling.php" >
                                <div><img class="large" src="../templates/images/thingstodo/cycling.jpg"
                                  alt="Cycling"  ></div></a>
                            <div class="orangeLine"></div>
                            <div class="desc">Cycling</div>
                        </div>
                    </div><!--end div.bottomcol-->
                </div><!--end div.innercontainer-->
            </div><!--End #container-->
            <?php
            include 'footer.inc.php';
            ?>
        </div>
    </body>
</html>    