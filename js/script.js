$(document).on("ready",function(){
	$(document).scroll(function(e) {
      	var altura=$(window).scrollTop();
		$(".menuSlider").css(".menuSlider");
		if(altura>=10){
			$(".menuSlider").css("backgroundColor","#ff5900");
		}else{
			$(".menuSlider").css("backgroundColor","rgba(255,89,0,0)");	
		}
    });
});