$(document).ready(function(){
    $("#container").load("home/home.html");
    $("a.home").click(function () {
        $("#container").load("home/home.html");});
    $("a.exploreNL").click(function () {
        $("#container").load("explore/explorenl.html");    });
    $("a.culture").click(function () {
        $("#container").load("explore/culture.html");    });    
    $("a.transport").click(function () {
        $("#container").load("explore/publictransport.html");    });    
    $("a.weather").click(function () {
        $("#container").load("explore/weather.html");    });    
    $("a.thingstodo").click(function () {
        $("#container").load("thingstodo/thingstodo.html");	}); 
    $("a.food").click(function () {
        $("#container").load("thingstodo/food.html");	});
    $("a.shopping").click(function () {
        $("#container").load("thingstodo/shopping.html");	}); 
    $("a.cycling").click(function () {
        $("#container").load("thingstodo/cycling.html");	 }); 
    $("a.event").click(function () {
        $("#container").load("events/events.html");	});
    $("a.summerEvent").click(function () {
        $("#container").load("events/summerEvents.html");	});
    $("a.autumnEvent").click(function () {
        $("#container").load("events/autumnEvents.html");	});
    $("a.springEvent").click(function () {
        $("#container").load("events/springEvents.html");	});
    $("a.winterEvent").click(function () {
        $("#container").load("events/winterEvents.html");	});
    $("a.contact").click(function () {
        $("#container").load("contact/contact.html");	});
       })