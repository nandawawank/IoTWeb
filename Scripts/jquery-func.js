  jQuery(document).ready(function(){ 

jQuery('#menuprojects a , #menuhome a ,#menuabout a,#menublog a,#menucontact a').click(function(){
		var to = jQuery(this).attr('href');
		  jQuery.scrollTo(to, 800);
		return false;
	});

});