$(document).ready(function(){
    $("#container").load("home/home.php");
    $("a.home").click(function () {
        $("#container").load("home/home.php");});
    $("a.exploreNL").click(function () {
        $("#container").load("explore/explorenl.php");    });
    $("a.culture").click(function () {
        $("#container").load("explore/culture.php");    });    
    $("a.transport").click(function () {
        $("#container").load("explore/publictransport.php");    });    
    $("a.weather").click(function () {
        $("#container").load("explore/weather.php");    });    
    $("a.thingstodo").click(function () {
        $("#container").load("thingstodo/thingstodo.php");	}); 
    $("a.food").click(function () {
        $("#container").load("thingstodo/food.php");	});
    $("a.shopping").click(function () {
        $("#container").load("thingstodo/shopping.php");	}); 
    $("a.cycling").click(function () {
        $("#container").load("thingstodo/cycling.php");	 }); 
    $("a.event").click(function () {
        $("#container").load("events/events.php");	});
    $("a.summerEvent").click(function () {
        $("#container").load("events/summerEvents.php");	});
    $("a.autumnEvent").click(function () {
        $("#container").load("events/autumnEvents.php");	});
    $("a.springEvent").click(function () {
        $("#container").load("events/springEvents.php");	});
    $("a.winterEvent").click(function () {
        $("#container").load("events/winterEvents.php");	});
    $("a.contact").click(function () {
        $("#container").load("contact/contact.php");	});
       });