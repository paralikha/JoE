// Nav Dropdown
$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, 
function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

// NiceScroll
$(document).ready(
    function() { 
        $("html").niceScroll();
    }
);

// lightSlider
$(document).ready(function() {
    $('#imageGallery').lightSlider({
        gallery:true,
        item:3,
        loop:true,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide'
            });
        }   
    });  
});

// lightslider
$(document).ready(function() {
    $('#imageSLider')
})

//  materialize btn

$(function(){
    var ink, d, x, y;
    $(".ripplelink").click(function(e){
        if($(this).find(".ink").length === 0){
            $(this).prepend("<span class='ink'></span>");
        }
         
        ink = $(this).find(".ink");
        ink.removeClass("animate");
         
        if(!ink.height() && !ink.width()){
            d = Math.max($(this).outerWidth(), $(this).outerHeight());
            ink.css({height: d, width: d});
        }
     
        x = e.pageX - $(this).offset().left - ink.width()/2;
        y = e.pageY - $(this).offset().top - ink.height()/2;
         
        ink.css({top: y+'px', left: x+'px'}).addClass("animate");
    });
});

