var $ = jQuery;

$(document).ready(function(){

	mmenuInit();
	
});



function mmenuInit() {

	var $menu = jQuery("#my-menu").mmenu({
		"extensions": [
			"fx-menu-zoom",
			"position-right",
			"pagedim-black"

		],
		"pageScroll": true,
		"navbar": {
			"title": "<a href='/'>testing<img class='img-fluid' src='/wp-content/themes/yscores/assets/img/logos/logo-main.svg'></a>"
		},
	},
	{
		// configuration
		offCanvas: {
			pageSelector: ".site"
		},
		clone: true
	});

	var $icon = jQuery(".hamburger");

	var API = $menu.data( "mmenu" );

	$icon.on( "click", function() {
		API.open();
	});

	API.bind( "open:finish", function() {
		setTimeout(function() {
			jQuery(".hamburger").addClass( "is-active" );
		}, 100);
	});
	API.bind( "close:finish", function() {
		setTimeout(function() {
			jQuery(".hamburger").removeClass( "is-active" );
		}, 100);
	});
}