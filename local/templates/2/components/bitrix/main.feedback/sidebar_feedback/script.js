$(function(){

	var offset = $(".mfeedback").offset();
	var topPadding = 15;
	$(window).scroll(function() {
	
		if ($(window).scrollTop() > offset.top) {
		
			$(".mfeedback").stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding});
			
		}
		else{
		
			$(".mfeedback").stop().animate({marginTop: 15});
			
		};
	
	});
   
});