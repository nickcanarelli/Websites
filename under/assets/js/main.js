// Mobile Navigation Menu
$(document).ready(function() {
    var isActive = false;
    
    $('.mobile-menu').on( 'click', function() {
        if (isActive) {
            $(this).removeClass('active');
            $('body').removeClass('menu-open');
        } else { 
            $(this).addClass('active');
            $('body').addClass('menu-open');
        }

        isActive = !isActive;
    });
});

$(document).ready(function() {    
    $('.nav > li > a').on( 'click', function() {
        $('.mobile-menu').removeClass('active');
        $('body').removeClass('menu-open');
    });
});