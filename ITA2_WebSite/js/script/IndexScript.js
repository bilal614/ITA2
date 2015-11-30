$(document).ready(function(){
    $("#container").load("webpage/publicPages/home/home.php");
    $("a.home").click(function () {
        $("#container").load("webpage/publicPages/home/home.php");});
    $("a.exploreNL").click(function () {
        $("#container").load("webpage/publicPages/explore/explorenl.php");    });
    $("a.culture").click(function () {
        $("#container").load("webpage/publicPages/explore/culture.php");    });    
    $("a.transport").click(function () {
        $("#container").load("webpage/publicPages/explore/publictransport.php");    });    
    $("a.weather").click(function () {
        $("#container").load("webpage/publicPages/explore/weather.php");    });    
    $("a.thingstodo").click(function () {
        $("#container").load("webpage/publicPages/thingstodo/thingstodo.php");	}); 
    $("a.food").click(function () {
        $("#container").load("webpage/publicPages/thingstodo/food.php");	});
    $("a.shopping").click(function () {
        $("#container").load("webpage/publicPages/thingstodo/shopping.php");	}); 
    $("a.cycling").click(function () {
        $("#container").load("webpage/publicPages/thingstodo/cycling.php");	 }); 
    $("a.event").click(function () {
        $("#container").load("webpage/publicPages/events/events.php");	});
    $("a.summerEvent").click(function () {
        $("#container").load("webpage/publicPages/events/summerEvents.php");	});
    $("a.autumnEvent").click(function () {
        $("#container").load("webpage/publicPages/events/autumnEvents.php");	});
    $("a.springEvent").click(function () {
        $("#container").load("webpage/publicPages/events/springEvents.php");	});
    $("a.winterEvent").click(function () {
        $("#container").load("webpage/publicPages/events/winterEvents.php");	});
    $("a.contact").click(function () {
        $("#container").load("webpage/publicPages/contact/contact.php");	});
    
       });
       
// function login() {
//        alert("Submit button clicked!");
//        $("#Login").slideUp().hide(); 
//        $("#LoginSuccess").slideDown().show();
//        return true;
//    