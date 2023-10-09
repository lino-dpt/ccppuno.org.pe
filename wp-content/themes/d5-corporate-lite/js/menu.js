jQuery(document).ready(function(){ 'use strict'; jQuery("#main-menu-con ul ul").css({display: "none"}); jQuery('#main-menu-con ul li').hover( function() { jQuery(this).find('ul:first').slideDown(200).css('visibility', 'visible'); jQuery(this).addClass('selected'); }, function() { jQuery(this).find('ul:first').slideUp(200); jQuery(this).removeClass('selected'); }); });

jQuery(document).ready(function(){ 'use strict';								  
	jQuery('#mobile-menu').click(function(){ 
		jQuery('#main-menu-con').toggleClass('mmenumobile'); jQuery(this).toggleClass('mmenuclose'); 		 
	});	 
});

jQuery(window).on('load resize', function () { 	'use strict';
	var resMwdtx = jQuery('#resmwdt').width();
	if( resMwdtx < 10 ){  jQuery('#main-menu-con').addClass('mmenumobile'); }
	jQuery('#mobile-menu').removeClass('mmenuclose');
});	