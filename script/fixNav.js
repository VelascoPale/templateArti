$(document).ready(function(){

	$(window).on('scroll', function(){
		if( $(window).scrollTop() > 0 ){
			$('.menu').addClass('nav-fixed');
			$('.name').addClass('nameFix');
		}else{
			$('.menu').removeClass('nav-fixed');
			$('.name').removeClass('nameFix');
		}
	});

});