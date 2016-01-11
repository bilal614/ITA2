//$(document).ready(function(){
//    $("#container").load("webpage/home/home.php");
//    $("a.home").click(function () {
//        $("#container").load("webpage/home/home.php");});
//    $("a.exploreNL").click(function () {
//        $("#container").load("webpage/explore/explorenl.php");    });
//    $("a.culture").click(function () {
//        $("#container").load("webpage/explore/culture.php");    });    
//    $("a.transport").click(function () {
//        $("#container").load("webpage/explore/publictransport.php");    });    
//    $("a.weather").click(function () {
//        $("#container").load("webpage/explore/weather.php");    });    
//    $("a.thingstodo").click(function () {
//        $("#container").load("webpage/thingstodo/thingstodo.php");	}); 
//    $("a.food").click(function () {
//        $("#container").load("webpage/thingstodo/food.php");	});
//    $("a.shopping").click(function () {
//        $("#container").load("webpage/thingstodo/shopping.php");	}); 
//    $("a.cycling").click(function () {
//        $("#container").load("webpage/thingstodo/cycling.php");	 }); 
//    $("a.event").click(function () {
//        $("#container").load("webpage/events/events.php");	});
//    $("a.summerEvent").click(function () {
//        $("#container").load("webpage/events/summerEvents.php");	});
//    $("a.autumnEvent").click(function () {
//        $("#container").load("webpage/events/autumnEvents.php");	});
//    $("a.springEvent").click(function () {
//        $("#container").load("webpage/events/springEvents.php");	});
//    $("a.winterEvent").click(function () {
//        $("#container").load("webpage/events/winterEvents.php");	});
//    $("a.contact").click(function () {
//        $("#container").load("webpage/contact/contact.php");	});
//    
//       });
       
//$(function() {
//
//    if(Modernizr.history){
//
//    //var $mainContent = $("#outContainer");
//    $("#mainMenu").delegate("a", "click", function() {
//        _link = $(this).attr("href");
//        history.pushState(null, null, _link);
//        loadContent(_link);
//        return false;
//    });
//
//    function loadContent(href){
////           $mainContent
////                   .find("#container")
////                   .fadeOut(200, function() {
////                       $mainContent.hide().load(href + " #container", function() {
////                           $mainContent.fadeIn(200, function() {       
////                           });
////                           $("#mainMenu a").removeClass("current");
////                           console.log(href);
////                           $("#mainMenu a[href$="+href+"]").addClass("current");
////                       });
////                   });
//             $("#container").hide();
//             $("#container").load("href");
//       }
//    
//    $(window).bind('popstate', function(){
//         _link = location.pathname();
//       loadContent(_link);
//    });
//
//    } // otherwise, history is not supported, so nothing fancy here.
//});
//Show the events page use ajax
// $(document).ready(function() {
//            $(".autumnEvent").click(function() {
//                   $.ajax({
//                        url: 'autumnEvent.php',
//                        type: 'post',
//                        data:{ action :'loadAutumn' },
//                        success:function(result) {
//                          $("#container").html(result);
//                        },
//                         error: function(xhr, desc, err) {
//                         console.log(xhr);
//                         console.log("Details: " + desc + "\nError:" + err);
//                     }
//                   });
//            });
//        });
function loadingAutumnRequest(){
     $.ajax({
        url: 'eventAjax.php',
        type: 'post',
        data:{ action :'loadAutumn' },
        success:function() {
          return true;
        },
         error: function(xhr, desc, err) {
         console.log(xhr);
         console.log("Details: " + desc + "\nError:" + err);
     }
    });   
}
function loadingSummerRequest(){
    $.ajax({
        url: 'eventAjax.php',
        type: 'post',
        data:{ action :'loadSummer' },
        success:function() {
          return true;
        },
         error: function(xhr, desc, err) {
         console.log(xhr);
         console.log("Details: " + desc + "\nError:" + err);
     }
    });  
}
function loadingWinterRequest(){
    $.ajax({
        url: 'eventAjax.php',
        type: 'post',
        data:{ action :'loadWinter' },
        success:function() {
          return true;
        },
         error: function(xhr, desc, err) {
         console.log(xhr);
         console.log("Details: " + desc + "\nError:" + err);
     }
    });  
}
function loadingSpringRequest(){
    $.ajax({
        url: 'eventAjax.php',
        type: 'post',
        data:{ action :'spring' },
        success:function() {
          return true;
        },
         error: function(xhr, desc, err) {
         console.log(xhr);
         console.log("Details: " + desc + "\nError:" + err);
     }
    });  
}
function loadingRequest(season){
    $.ajax({
        url: 'eventAjax.php',
        type: 'post',
        data:{ action :season },
        success:function() {
          return true;
        },
         error: function(xhr, desc, err) {
         console.log(xhr);
         console.log("Details: " + desc + "\nError:" + err);
     }
    });  
}

