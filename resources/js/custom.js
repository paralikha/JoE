$(document).ready(function() {
 
  //Sort random function
  function random(owlSelector){
    owlSelector.children().sort(function(){
        return Math.round(Math.random()) - 0.5;
    }).each(function(){
      $(this).appendTo(owlSelector);
    });
  }
 
    $("#owl-demo").owlCarousel({
        navigation: false,
        beforeInit : function(elem){
            random(elem);
        }
    });
});

//  Dropdown
$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

// nicescroll

$(document).ready(
    function() { 
        $("html").niceScroll();
    }
);