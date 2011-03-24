

function getDokobutton() {

	$('.perspective1').hide();
	$("#getDokobtn").css('cursor','pointer');
						
	
	$(".getDokoimg").mouseover(function() {
			$('img').slice(1).attr('src', 'images/doko_btn_hit.png');
			$('.perspective1').slideDown('fast', 'linear', function(){
			});
	});
	
	$(".getDokoimg").mouseout(function() {
			$('img').slice(1).attr('src', 'images/doko_btn_up.png');
	});
	
	
	$('#getDokotxt').mouseout(function() {
		$('.perspective1').slideUp('fast', 'linear', function(){
		}).hide('slow');
	});


}

function doThatthing(){
	$('#join_btn').click(function(){
	
	alert("howdy");
	});
	
	$('#demo_btn').mouseover(function(){
	alert("slide, dammit!");
		$('#demo_btn').animate({marginLeft:'+=10',}, 500);
	});

}





