<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
            $("#container").load("home/home.html");  });
        $("a.explorenl").click(function () {
        $("#container").load("explore/explorenl.html");	}); 
    })
</script>
<div id = "navLinkContainer">
<div></div>
    <div>
        <ul id="navLink">
            <li></li>
            <li class="preActive"><a class="home" href="#Home">Home</a><span></span></li>
            <li class="preActive"><a class="explorenl" href="#Explore NL">Explore NL</a><span></span>
            </li>
            <li class="activeLinkNav"><a href="#">Public Transport</a><span></span></li>
        </ul>
    </div>
</div>
<div class="innercontainer">
<div id="titleContainer">
    <div id="Title">Public Transport</div>
    <div id="greyline"></div>
</div>
<div id="UpperRow">
    <div id="PTleftcol">
        <img src="images/explore/NLrailmap.jpg" width="612" height="288">
    </div>
    <div id="PTrightcol">
        <div id="usefulLinks">Useful Links</div>
        <div class="PTfont">Public transport in </div>
        <div class="PTbuttons"><a href="#">Amsterdam</a></div>
        <div class="PTbuttons"><a href="#">Rotterdam</a></div>
        <div id="PT3rdbutton"><a href="#">From Schiphol Airport</a></div>
        <div class="linkList"><a 
                                href="http://www.holland.com/uk/tourism/transport/getting-
            around-in-holland/public-transport-in-holland/ov-chip-card-5.htm">The OV chip-
            card</a></div>
        <div class="linkList"><a 
                                href="http://www.holland.com/uk/tourism/transport/getting-
            around-in-holland/airport-transfers-1/airport-transfers.htm">Airport 
            Transfers</a></div>
        <div class="linkList"><a 
                                href="http://www.holland.com/uk/tourism/transport/getting-
            around-in-holland/traveling-around-holland-by-ferry-1/traveling-around-
            holland-by-ferry.htm">Travelling by ferry</a></div>
        <div class="linkList"><a 
                                href="http://www.holland.com/uk/tourism/transport/getting-
            around-in-holland/travel-by-train-1/travel-by-train.htm">Travel by train</a>
        </div>
    </div>
</div><!--end div.UpperRow-->
<div id="bottomRow">
    <p class="Para">Holland is a small country with a relatively big population. It is only natural that we have an excellent public transport system. Wherever you want to go in Holland, the bus, train, metro or ferry will probably get you there. Furthermore, there are frequent services and all means of public transport are perfectly safe - and affordable. While there are different public transport providers in different parts of the country, they work together very well. If you want to use the public transport system in Holland, you will need an OV chip card to pay for your trip. These are available from railway and bus stations and at the bigger supermarkets. All you need to do is charge credit to the card and you can use it immediately.</br></p>

<p class="Para">Please note that you cannot use your credit card to add travel credit to your OV chip card or to buy a railway ticket! The only two places where you can buy a railway ticket from the ticket machine with your credit card are Schiphol Airport and Amsterdam Central Station.</p>
<ul id="PTul">
    <li>Public transportation is quick and low cost</li>
    <li>Buy an (anonymous) OV chip card</li>
    <li>You cannot use your credit card to add travel credit to you OV chip card</li>
    <li>Generally you cannot buy railway tickets using a credit card</li>
</ul>
</div><!---end of bottomRow----!>
</div><!--end div.Culturecontainer-->
