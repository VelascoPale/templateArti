$(document).ready(function(){

	$(window).on('scroll', function(){

		if ($(window).width() > 960) { //COMPUTADORA

			if( $(window).scrollTop() > 300 ){
				$('.aside').addClass('fix-aside');
			}else{
				$('.aside').removeClass('fix-aside');
			}

	 	}else{}
	});
});





