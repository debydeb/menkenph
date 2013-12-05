$(document).ready(function(){
	$alto = $(window).height();
	$ancho = $(window).width();
	
	$('.prod-single').click(function(){
		$currentId = $(this).attr('id');
		
		$image = '#'+$currentId+' img';
		$currentSrc = $($image).attr('src');
		
		$contentName = '#'+$currentId+' .pg-info h3';
		$contentDetail = '#'+$currentId+' .pg-info .pg-details';
		$contentBrand = '#'+$currentId+' .pg-info .pg-brand';
		
		$currentCnt1 = $($contentName).text();
		$currentCnt2 = $($contentDetail).text();
		$currentCnt3 = $($contentBrand).text();
		
		$show = '<div id="display"><img src="'+ $currentSrc +'"/><div id="displaycont"><h1>'+$currentCnt1+'</h1><p>'+$currentCnt2+'</p><p>'+$currentCnt3+'</p></div></div>';

		$('.main-container').prepend($show);

		$('#display').click(function(){
			$(this).css('display','none');
		});	
	});


});