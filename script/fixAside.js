$(document).ready(function(){

		$(window).on('scroll', function(){

			if ($(window).width() > 960){
				
				if( $(window).scrollTop() > 1030 ){
					$('.aside').addClass('fix-aside');
				}else{
					$('.aside').removeClass('fix-aside');
				}

			}else{}

		});
});