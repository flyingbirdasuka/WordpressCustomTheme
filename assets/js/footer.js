(function() {
  "use strict";

  jQuery(function(){

  	  var hash = "";
	  hash = window.location.hash;

	  hash && jQuery('ul.nav a[href="' + hash + '"]').tab('show');

	  jQuery('.nav-tabs a').click(function (e) {
	  	if ( this !== null ) {
	  		jQuery(this).tab('show');
	  	}
		
		var scrollmem = jQuery('body').scrollTop() || jQuery('html').scrollTop();
		window.location.hash = this.hash;
		jQuery('html,body').scrollTop(scrollmem);
	  });

	  jQuery('.menu-item a').click(function (e) {
	  	jQuery(window).on('hashchange',function(){ 
	        window.location.reload(true);
	    });
	  });
	  
	});
})()