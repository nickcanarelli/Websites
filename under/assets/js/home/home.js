// Add Underline to First Word in Hero
$(function() {
    $('#under-hero .title span').each(function() {
        var text = this.innerHTML;
        var firstSpaceIndex = text.indexOf(" ");
        if (firstSpaceIndex > 0) {
            var substrBefore = text.substring(0,firstSpaceIndex);
            var substrAfter = text.substring(firstSpaceIndex, text.length)
            var newText = '<span class="firstWord">' + substrBefore + '</span>' + substrAfter;
            this.innerHTML = newText;
        } else {
            this.innerHTML = '<span class="firstWord">' + text + '</span>';
        }
    });
});

// Processors Swiper Init
var processors_swiper = new Swiper('.processors_swiper', {
    observer: true,
    observeParents: true,
    slidesPerView: 2.5,
    spaceBetween: 30,
    centeredSlides: false,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
    breakpoints: {
        768: {
          slidesPerView: 3.5,
          spaceBetween: 50,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 85,
        },
    }
});

// How It Works Swiper Init
var hiw_swiper = new Swiper('.hiw_swiper', {
    slidesPerView: 1,
    pagination: {
      el: '.swiper-pagination',
    },
});

// Partners Swiper Init
var partners_swiper = new Swiper('.partners_swiper', {
    observer: true,
    observeParents: true,
    slidesPerView: 2.5,
    spaceBetween: 30,
    centeredSlides: false,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: '.swiper-partner-next',
        prevEl: '.swiper-partner-prev',
    },
    breakpoints: {
        768: {
          slidesPerView: 3.5,
          spaceBetween: 50,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 85,
        },
    }
});

// Pricing Swiper Init
var pricing_swiper = new Swiper('.pricing_swiper', {
    slidesPerView: 1,
    initialSlide: 1,
    pagination: {
      el: '.pricing-swiper-pagination',
    },
});

// How It Works Vertical Tabs
function vertical_tabs() {
    if ($('.vtabs').length > 0) {
        $('.vtabs .tabs button').hover(function() {
            if($(this).hasClass('active')) {
                return;
            }

            var temp_tab = $(this).data('tab');
            var temp_tab_js = this.getAttribute('data-tab');
            var temp_content = $('.vtabs .maincontent .tabcontent[data-tab="' + temp_tab + '"]');
            var temp_content_js = document.querySelector('.vtabs .maincontent .tabcontent[data-tab="' + temp_tab_js + '"]');
            var temp_content_active_js = document.querySelector('.vtabs .maincontent .tabcontent.active');

            $('.vtabs .tabs button').removeClass('active');
            $('.vtabs .tabs button[data-tab="' + temp_tab + '"]').addClass('active');

            var animation_start = anime({ duration: 400, targets: temp_content_active_js, opacity:[1,0], translateX: [0,'100%'], easing: 'easeInOutCubic',
            complete: function()
                {
                    $('.vtabs .maincontent .tabcontent').removeClass('active');
                    temp_content.addClass('active');
                    var animation_end = anime({ duration: 200, targets: temp_content_js, opacity:[0,1], translateX: ['100%','0'], easing: 'easeInOutCubic' });
                }
            });
        }, function() {
            return;
        });
    }
}
$(function() {
    vertical_tabs();
});

// FAQs
$(document).ready(function() {
    $(".under-faq > .under-faq__item").click(function() {
        // Cancel the siblings
        $(this).siblings(".under-faq__item").removeClass("is-active").children(".under-faq__item-content").slideUp();
        // Toggle the item
        $(this).toggleClass("is-active").children(".under-faq__item-content").slideToggle("ease-out");
    });
});

// Smooth Anchor
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});