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

