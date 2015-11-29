$(document).ready(function(){
    $("#container").load("webpage/home/home.php");
    $("a.home").click(function () {
        $("#container").load("webpage/home/home.php");});
    $("a.exploreNL").click(function () {
        $("#container").load("webpage/explore/explorenl.php");    });
    $("a.culture").click(function () {
        $("#container").load("webpage/explore/culture.php");    });    
    $("a.transport").click(function () {
        $("#container").load("webpage/explore/publictransport.php");    });    
    $("a.weather").click(function () {
        $("#container").load("webpage/explore/weather.php");    });    
    $("a.thingstodo").click(function () {
        $("#container").load("webpage/thingstodo/thingstodo.php");	}); 
    $("a.food").click(function () {
        $("#container").load("webpage/thingstodo/food.php");	});
    $("a.shopping").click(function () {
        $("#container").load("webpage/thingstodo/shopping.php");	}); 
    $("a.cycling").click(function () {
        $("#container").load("webpage/thingstodo/cycling.php");	 }); 
    $("a.event").click(function () {
        $("#container").load("webpage/events/events.php");	});
    $("a.summerEvent").click(function () {
        $("#container").load("webpage/events/summerEvents.php");	});
    $("a.autumnEvent").click(function () {
        $("#container").load("webpage/events/autumnEvents.php");	});
    $("a.springEvent").click(function () {
        $("#container").load("webpage/events/springEvents.php");	});
    $("a.winterEvent").click(function () {
        $("#container").load("webpage/events/winterEvents.php");	});
    $("a.contact").click(function () {
        $("#container").load("webpage/contact/contact.php");	});
    
       });
       
// function login() {
//        alert("Submit button clicked!");
//        $("#Login").slideUp().hide(); 
//        $("#LoginSuccess").slideDown().show();
//        return true;
//    