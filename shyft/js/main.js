jQuery(document).ready(function($) {
    
    jQuery(function($) {
		
		$('[data-toggle="tooltip"]').tooltip();
	
		
		// Custom side-nav-circles
			// init active
			$('ul.side-nav li a.showtab1').addClass('active');
		
			// Tab 1
			$('ul.side-nav li a.showtab1').click(function(){
				$(this).addClass('active');
				$('ul.side-nav li a.showtab2').removeClass('active');
				$('ul.side-nav li a.showtab3').removeClass('active');
				$('ul.side-nav li a.showtab4').removeClass('active');
			  	
				// activate tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(1)').addClass('ui-tabs-active ui-state-active');
				
				// deactive sibling tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(4)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(2)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(3)').removeClass('ui-tabs-active ui-state-active');
								
				// show/hide tabs
				$('#tabs-1').fadeIn(1500);
				$('#tabs-2').hide();
				$('#tabs-3').hide();
				$('#tabs-4').hide();
				
				$('html, body').animate({
					scrollTop: $(".plan-tabs").offset().top
				}, 1000);
			
			});
			
			// Tab 2
			$('ul.side-nav li a.showtab2').click(function(){
				$(this).addClass('active');
			  	$('ul.side-nav li a.showtab3').removeClass('active');
				$('ul.side-nav li a.showtab1').removeClass('active');
				$('ul.side-nav li a.showtab4').removeClass('active');
				
				// activate tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(2)').addClass('ui-tabs-active ui-state-active');
				
				// deactive sibling tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(4)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(1)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(3)').removeClass('ui-tabs-active ui-state-active');
				
				// show/hide tabs
				$('#tabs-2').fadeIn(1500);
				$('#tabs-1').hide();
				$('#tabs-3').hide();
				$('#tabs-4').hide();
				
				$('html, body').animate({
					scrollTop: $(".plan-tabs").offset().top
				}, 1000);
				
			});
		
			// Tab 3
			$('ul.side-nav li a.showtab3').click(function(){
				$(this).addClass('active');
				$('ul.side-nav li a.showtab1').removeClass('active');
				$('ul.side-nav li a.showtab2').removeClass('active');
				$('ul.side-nav li a.showtab4').removeClass('active');
			  	
				// activate tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(3)').addClass('ui-tabs-active ui-state-active');
				
				// deactive sibling tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(4)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(1)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(2)').removeClass('ui-tabs-active ui-state-active');
				
				// show/hide tabs
				$('#tabs-3').fadeIn(1500);
				$('#tabs-1').hide();
				$('#tabs-4').hide();
				$('#tabs-2').hide();
				
				$('html, body').animate({
					scrollTop: $(".plan-tabs").offset().top
				}, 1000);
				
			});
			
			// Tab 4
			$('ul.side-nav li a.showtab4').click(function(){
				$(this).addClass('active');
				$('ul.side-nav li a.showtab1').removeClass('active');
				$('ul.side-nav li a.showtab3').removeClass('active');
				$('ul.side-nav li a.showtab2').removeClass('active');
			  	
				// activate tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(4)').addClass('ui-tabs-active ui-state-active');
				
				// deactive sibling tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(1)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(3)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(2)').removeClass('ui-tabs-active ui-state-active');
				
				// show/hide tabs
				$('#tabs-4').fadeIn(1500);
				$('#tabs-2').hide();
				$('#tabs-3').hide();
				$('#tabs-1').hide();
				
				$('html, body').animate({
					scrollTop: $(".plan-tabs").offset().top
				}, 1000);
				
			});
		
		// Add active class to side-nav-circles when main nav clicked
		$(".plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(1)").click(function(){
			$("ul.side-nav li a.showtab1").addClass("active");
			$("ul.side-nav li a.showtab2").removeClass("active");
			$("ul.side-nav li a.showtab3").removeClass("active");
			$("ul.side-nav li a.showtab4").removeClass("active");
		});
		$(".plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(2)").click(function(){
			$("ul.side-nav li a.showtab2").addClass("active");
			$("ul.side-nav li a.showtab1").removeClass("active");
			$("ul.side-nav li a.showtab3").removeClass("active");
			$("ul.side-nav li a.showtab4").removeClass("active");
		});
		$(".plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(3)").click(function(){
			$("ul.side-nav li a.showtab3").addClass("active");
			$("ul.side-nav li a.showtab2").removeClass("active");
			$("ul.side-nav li a.showtab1").removeClass("active");
			$("ul.side-nav li a.showtab4").removeClass("active");
		});
		$(".plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(4)").click(function(){
			$("ul.side-nav li a.showtab4").addClass("active");
			$("ul.side-nav li a.showtab2").removeClass("active");
			$("ul.side-nav li a.showtab3").removeClass("active");
			$("ul.side-nav li a.showtab1").removeClass("active");
		});
		
		//@end custom-side-nav
		
		// Custom bottom-nav
			
			// Tab 1
			$('.see-more a.showtab1').click(function(){
				$('ul.side-nav li a.showtab1').addClass('active');
				$('ul.side-nav li a.showtab2').removeClass('active');
				$('ul.side-nav li a.showtab3').removeClass('active');
				$('ul.side-nav li a.showtab4').removeClass('active');
			  	
				// activate tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(1)').addClass('ui-tabs-active ui-state-active');
				
				// deactive sibling tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(4)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(2)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(3)').removeClass('ui-tabs-active ui-state-active');
								
				// show/hide tabs
				$('#tabs-1').fadeIn(1500);
				$('#tabs-2').hide();
				$('#tabs-3').hide();
				$('#tabs-4').hide();
				
				$('html, body').animate({
					scrollTop: $(".plan-tabs").offset().top
				}, 1000);
				
			});
			
			// Tab 2
			$('.see-more a.showtab2').click(function(){
				$('ul.side-nav li a.showtab2').addClass('active');
			  	$('ul.side-nav li a.showtab3').removeClass('active');
				$('ul.side-nav li a.showtab1').removeClass('active');
				$('ul.side-nav li a.showtab4').removeClass('active');
				
				// activate tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(2)').addClass('ui-tabs-active ui-state-active');
				
				// deactive sibling tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(4)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(1)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(3)').removeClass('ui-tabs-active ui-state-active');
				
				// show/hide tabs
				$('#tabs-2').fadeIn(1500);
				$('#tabs-1').hide();
				$('#tabs-3').hide();
				$('#tabs-4').hide();
				
				$('html, body').animate({
					scrollTop: $(".plan-tabs").offset().top
				}, 1000);
				
			});
		
			// Tab 3
			$('.see-more a.showtab3').click(function(){
				$('ul.side-nav li a.showtab3').addClass('active');
				$('ul.side-nav li a.showtab1').removeClass('active');
				$('ul.side-nav li a.showtab2').removeClass('active');
				$('ul.side-nav li a.showtab4').removeClass('active');
			  	
				// activate tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(3)').addClass('ui-tabs-active ui-state-active');
				
				// deactive sibling tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(4)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(1)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(2)').removeClass('ui-tabs-active ui-state-active');
				
				// show/hide tabs
				$('#tabs-3').fadeIn(1500);
				$('#tabs-1').hide();
				$('#tabs-4').hide();
				$('#tabs-2').hide();
				
				$('html, body').animate({
					scrollTop: $(".plan-tabs").offset().top
				}, 1000);
				
			});
			
			// Tab 4
			$('.see-more a.showtab4').click(function(){
				$('ul.side-nav li a.showtab4').addClass('active');
				$('ul.side-nav li a.showtab1').removeClass('active');
				$('ul.side-nav li a.showtab3').removeClass('active');
				$('ul.side-nav li a.showtab2').removeClass('active');
			  	
				// activate tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(4)').addClass('ui-tabs-active ui-state-active');
				
				// deactive sibling tabs
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(1)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(3)').removeClass('ui-tabs-active ui-state-active');
				$('.plan-tabs .tab-content ul.ui-tabs-nav li:nth-child(2)').removeClass('ui-tabs-active ui-state-active');
				
				// show/hide tabs
				$('#tabs-4').fadeIn(1500);
				$('#tabs-2').hide();
				$('#tabs-3').hide();
				$('#tabs-1').hide();
				
				$('html, body').animate({
					scrollTop: $(".plan-tabs").offset().top
				}, 1000);
				
			});

		
        $('.box p').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
        $('.entry-title').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
        $('.entry-summary p').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
		
		// Responsive table JS

		$( "ul" ).on( "click", "li", function() {
		  var pos = $(this).index()+2;
		  $("tr").find('td:not(:eq(0))').hide();
		  $('td:nth-child('+pos+')').css('display','table-cell');
		  $("tr").find('th:not(:eq(0))').hide();
		  $('li').removeClass('active');
		  $(this).addClass('active');
		});

		// Initialize the media query
		  var mediaQuery = window.matchMedia('(min-width: 640px)');

		  // Add a listen event
		  mediaQuery.addListener(doSomething);

		  // Function to do something with the media query
		  function doSomething(mediaQuery) {    
			if (mediaQuery.matches) {
			  $('.sep').attr('colspan',5);
			} else {
			  $('.sep').attr('colspan',2);
			}
		  }
		  // On load
		  doSomething(mediaQuery);
		
		
		$(window).on("scroll", function() {
			if($(window).scrollTop() > 50) {
				$(".site-header").addClass("active");
				 $(".site-header > .container").addClass("active");
			} else {
			//remove the background property so it comes transparent again (defined in your css)
			  $(".site-header").removeClass("active");
				$(".site-header > .container").removeClass("active");
			}
		});		
		
		
		//Scroll To Top Button
		$('#scroll-top').click(function(){
			$('html, body').animate({
				scrollTop: $(".site-header").offset().top - 50
			}, 1000);
		});
		
		//Scroll To Contact Section
		$('.contact-us-link').click(function(){
			$('html, body').animate({
				scrollTop: $("#Contact-Us").offset().top - 100
			}, 500);
		});
		
		// Scroll to Find Talent Section
		$('a.find-talent-btn').click(function(){
			$('html, body').animate({
				scrollTop: $("#find-talent").offset().top - 160
			}, 500);
		});
		
		// Limit Characters on Blog Posts Content
		$(".home .jobify_widget_blog_posts .entry-summary p:nth-child(1)").each(function () {
			len=$(this).text().length;
			str= $(this).text().substr(0,144);
			lastIndexOf = str.lastIndexOf(" "); 
			if(len>80) {
				$(this).text(str.substr(0, lastIndexOf) + '…');
			}
		});
		
		// Homepage Testimonial Slider
		$('#custom_html-16 .wpsisac-slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if ($(slick.$slides.get(currentSlide)).attr('id') == "slick-slide11") {
				$('#custom_html-16 .slick-list').addClass('slide2height'); 
			} else {
				$('#custom_html-16 .slick-list').removeClass('slide2height'); 
			}
			
		});
		
		// Internal Page Testimonial Slider
		$('.page-template #custom_html-17 .wpsisac-slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if ($(slick.$slides.get(currentSlide)).attr('id') == "slick-slide11") {
				$('.page-template #custom_html-17 .slick-list').addClass('slide2height'); 
			} else {
				$('.page-template #custom_html-17 .slick-list').removeClass('slide2height'); 
			}
			
		});
		
		// Homepage Plan Slider
		$('#custom_html-19 .wpsisac-slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if ($(slick.$slides.get(currentSlide)).attr('id') == "slick-slide00") {
				$('#custom_html-19 .slick-list').addClass('slide2height'); 
			} else {
				$('#custom_html-19 .slick-list').removeClass('slide2height'); 
			}
			
		});
		
		$('#custom_html-19 .wpsisac-slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if ($(slick.$slides.get(currentSlide)).attr('id') == "slick-slide01") {
				$('#custom_html-19 .slick-list').addClass('slide1height'); 
			} else {
				$('#custom_html-19 .slick-list').removeClass('slide1height'); 
			}
			
		});
		
		$('#custom_html-19 .wpsisac-slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if ($(slick.$slides.get(currentSlide)).attr('id') == "slick-slide02") {
				$('#custom_html-19 .slick-list').addClass('slide3height'); 
			} else {
				$('#custom_html-19 .slick-list').removeClass('slide3height'); 
			}
			
		});
		
		$('#custom_html-19 .wpsisac-slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if ($(slick.$slides.get(currentSlide)).attr('id') == "slick-slide03") {
				$('#custom_html-19 .slick-list').addClass('slide4height'); 
			} else {
				$('#custom_html-19 .slick-list').removeClass('slide4height'); 
			}
			
		});
		
		// Internal Page Plan Slider
		$('.page-template #custom_html-20 .wpsisac-slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if ($(slick.$slides.get(currentSlide)).attr('id') == "slick-slide00") {
				$('.page-template #custom_html-20 .slick-list').addClass('slide2height'); 
			} else {
				$('.page-template #custom_html-20 .slick-list').removeClass('slide2height'); 
			}
			
		});
		
		$('.page-template #custom_html-20 .wpsisac-slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if ($(slick.$slides.get(currentSlide)).attr('id') == "slick-slide01") {
				$('.page-template #custom_html-20 .slick-list').addClass('slide1height'); 
			} else {
				$('.page-template #custom_html-20 .slick-list').removeClass('slide1height'); 
			}
			
		});
		
		$('.page-template #custom_html-20 .wpsisac-slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if ($(slick.$slides.get(currentSlide)).attr('id') == "slick-slide02") {
				$('.page-template #custom_html-20 .slick-list').addClass('slide3height'); 
			} else {
				$('.page-template #custom_html-20 .slick-list').removeClass('slide3height'); 
			}
			
		});
		
		$('.page-template #custom_html-20 .wpsisac-slick-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if ($(slick.$slides.get(currentSlide)).attr('id') == "slick-slide03") {
				$('.page-template #custom_html-20 .slick-list').addClass('slide4height'); 
			} else {
				$('.page-template #custom_html-20 .slick-list').removeClass('slide4height'); 
			}
			
		});
		
		
    }); 
    
});