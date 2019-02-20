function efectos()
{
	alert('funciona')

	// Carga subitamente
	$('#jqy').on('click', function(evento){
		evento.preventDefault()
		$('#contenido').load('html/jquery.html')
	})

	// Se va subitamente pero carga con FadeIn en 2 segundos
	$('#jqi').on('click', function(evento){
		evento.preventDefault()
		$('#contenido').load('html/jquery-ui.html', function(){
			$(this)
				.css({display : 'none'})
				.fadeIn(2000)
		})

	})

	// Se va con fadeOut en 2 segndos y carga con fadeIn en 2 segs
	$('#jqm').on('click', function(evento){
		evento.preventDefault()
		$('#contenido').fadeOut(2000, function(){
			$(this).load('html/jquery-mobile.html', function(){
				$(this).fadeIn(2000)
			})
		})

	})

	// Se va con hide(reduce alto y ancho hasta llegar a 0) en 2 segs y carga con show(aumenta alto y ancho en x tiempo) en 2 segs
	$('#jqu').on('click', function(evento){
		evento.preventDefault()
		$('#contenido').hide(2000, function(){
			$(this).load('html/qunit.html', function(){
				$(this).show(2000)
			})
		})
	})

	// Se va con slideUp(reduce altura hasta llegar a 0 ) y carga con slideDown(aumenta su altura en x tiempo) en 2 segs
	$('#jqs').on('click', function(evento){
		evento.preventDefault()
		$('#contenido').slideUp(2000, function(){
			$(this).load('html/sizzle.html', function(){
				$(this).slideDown(2000)
			})
		})
	})

	//$('nav a').on('click', function(){})
	$('nav').find('a').on('click', function(){
		$('nav')
			.find('a')
			.removeClass('actual')
		$(this).addClass('actual')
	})
}