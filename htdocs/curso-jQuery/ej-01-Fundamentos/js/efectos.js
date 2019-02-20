/* Los tres elementos PADRES(los mas importantes) en JavaScript son
	- El window, que controla todo lo que tiene que ver con la ventana de mi navegador
	- El document, que es la interfaz que tiene JS para interactuar con el documento HTML
	- Navigator, que me da las caracteristicas del usuario que esta visitando mi sitio 
*/

// Sintaxis jQuery para seleccionar un selector y trabajar con ellos
// Un selector es cualquier elemento en el documento HTML con el que puedo trabajar
// Hay seis tipos de selectores, objetos JavaScript, etiquetas (HTML), identificadores (css - id), clases (css - class), pseudo clases y pseudo elementos de css
// forma simple y completa de trabajar con selectores
//jQuery('selector') o $('selector')

// Una de las principales funciones de jQuery es seleccionar elementos en el DOM

//**************************************************

// Como trabajamos los EVENTOS en JavaScript

// 1.La forma mas vulgar es y menos recomendable es agregar el evento directamente dentro del elementos HTML
// EJ: <p onclick...></p>


// 2.Evento semantico
// La funcion no tiene nombre, por lo cual es anonima, por eso solo ponemos 'function()'
// Al ser una funcion anonima(sin nombre), se utiliza inmediatamente al ser creada
// window.onload es el evento inicializador que se carga cuando carga nuestra pagina, es el primer evento de todos
// Asi se ejecuta el window.onload de manera semantica
	// window.onload = function()
	// {
	// 	alert('Se ha cargado el documento semanticamente con window')//funciona
	// }


// Activamos el mismo evento utilizando sintaxis jQuery y de manera multiple
	// jQuery(window).on('load', function()
	// {
	// 	alert('Se ha cargado el documento semanticamente desde window con jQuery')//funciona
	// })


// En jQuery 3.x.x, document.onready no da error pero no muestra nada
	// document.onready = function() 
	// {
	// 	alert('Se ha cargado el documento semanticamente con document')
	// }

// Document con jQuery
// Forma semantica
// En window se usa load, en document se usa ready
	// $(document).ready(function ()
	// {
	// 	alert('Se ha cargado el documento semanticamente desde document con ready')//funciona
	// })



//3.Eventos multiples
// Hacemos uso de los LISTENERS de JavaScript
//window.addEventListener('nombreEvento', nombreFuncion)
	// window.addEventListener('load', function()
	// {
	// 	alert('Se ha cargado el documento con listeners y window')//funciona
	// })

	// window.removeEventListener('load', function(){ }) 

// Version con jQuery del uso de listeners de JS
// Activar evento con window usando jQuery - la sintaxis usa .on en lugar de .addEventListener
// Al ser evento multiple, tiene un apagado y encendido - en este caso, un on y off
	// $(window).on('load', function()
	// {
	// 	alert('Se ha cargado el documento con listeners de jQuery y window')//funciona
	// })

	// $(window).off('load', function(){ })


// Utilizo el document para activar el evento
// Listener con document no existe
	// document.addEventListener('ready', function()
	// {
	// 	alert('Se ha cargado el documento con listeners y document')
	// })

	// document.removeEventListener('ready', function(){ })

//Utilizo el document para activar el evento con jQuery
	// $(document).on('ready', function()
	// {
	// 	alert('Se ha cargado el documento con listeners de jQuery y document')
	// })

	// $(document).off('ready', function(){ })

// Cual es la diferencia entre ejecutar un evento semanticamente y con eventos multiples?

// El evento semantico siempre va a existir
// Mientras mi documento exista en el navegador, el evento va a existir

// En cambio, los eventos multiples (que utilizan listeners de JS) los puedo prender y apagar en cualquier momento
// Se prenden con window.addEventListener('nombreEvento', nombreFuncion)
// Se apagan con window.removeEventListener('nombreEvento', nombreFuncion)

// Por esta razon, los eventos multiples suelen tener ventaja frente a los eventos semanticos
// Dependiendo de la interaccion que el usuario haga con mi sitio, le voy a dar la capacidad de prender o apagar ciertas caracteristicas de mi interfaz

function efectos()
{
	//alert('Ya se invocar jQuery')
	

	// Primer efecto - botones
	/*
	jQuery('p').click(function(){
		jQuery(this).hide()
	})
	*/

	// Sintaxis semantica
	/*$('p').click(function(){
		$(this).hide()
	})*/

	// Sintaxis de evento multiple
	// Oculta parrafo
	$('p').on('click', function(){
		$(this).hide()
	})

	// Muestra parrafo
	$('#boton').on('click', function(){
		$('p').show()
	})


	// Aplico estilos CSS a elementos HTML con jQuery
	$('p').css('background-color', 'yellow')

	$('#boton2').on('click', function(){
		$('p').hide(2000)
	})

	$('#boton3').on('click', function(){
		$('p').show('fast')/* slow, fast, swing(swing es una aceleracion) */
	})

	$('#boton4').on('click', function(){
		$('p').toggle()
	})

	$('#boton5').on('click', function(){
		$('p').toggle('slow')
	})

	// Segundo efecto - mostrar y ocultar capas

	$('.mostrar').on('click', function(){
		$('.deslizante').slideDown(1500)
	})

	$('.ocultar').on('click', function(){
		$('.deslizante').slideUp('fast')
	})

	$('.mostrar-ocultar').on('click', function(){
		$('.deslizante').slideToggle()
	})

	$('#boton6').on('click', function(){
		$('#cuadro').fadeTo(3000, .25)// fadeTo aplica opacidad('velocidad', 'nivel de opacidad')
	})
	$('#boton7').on('click', function(){
		$('#cuadro').fadeTo('slow', 1)// el nivel de opacidad va de 0 a 1(con todos los decimales entre 0 y 1)
	})
	$('#boton8').on('click', function(){
		$('#cuadro').fadeOut()
	})
	$('#boton9').on('click', function(){
		$('#cuadro').fadeIn()
	})
	$('#parpadea').on('click', function(){
		$('#cuadro').fadeOut().fadeIn()
	})

	$('#boton10').on('click', function(){
		$('#animable')
			.animate({height : 300}, 'slow')
			.animate({width : 300}, 1500)
			.animate({height : 100, width : 100}, 3000)
	})
	$('#boton11').on('click', function(){
		$('#animable').animate({left : '50%'}, 'swing')//La posicion del objeto debe ser relativa, no absoluta en las propiedades css
		$('#animable').animate({width : 400}, 1000)// Si la velocidad a la que se modifica la propiedad css esta en numeros, son milisegundos(1500 = segundo y medio)
		$('#animable').animate({'font-size' : '3rem'}, 'slow')// Si la propiedad css tiene mas de una palabra, se pasa como string o se usa notacion camello
		$('#animable').animate({fontSize : '2rem'}, 'slow')
		
		//http://plugins.jquery.com/color/   --Pagina donde descargar el plugin
		$('#animable').animate({backgroundColor : 'blue'}, 500)// No se puede manipular el color de los elementos css con animaciones jQuery
		$('#animable').animate({color : 'yellow'}, 'swing')// Sin embargo, existe un plugin descargable de jQuery que permite manipular elementos que jQuery normalmente no permite, como el color de la letra o del fondo
		$('#animable').animate({top : -100}, 1200)//cuando el tamaño o la distancia del elemento css no esta en comillas simples, son pixeles {top : -100}
		$('#animable').animate({ // Volvemos el elemento a su forma original
			top : 0,
			left : 0,
			width : 100,
			fontSize : '1rem',
			backgroundColor : '#EC673A',
			color : 'black'
		}, 'fast')
	})

	$('#boton12').on('click', function(){
		
		// Escrito de esta forma, se ejecutará primero el alert y luego el hide, ya que las alertas son intrusivas y se adelanta al hide
		// Para ejecutar primero el evento y luego el alert, debemos usar la funcion CALLBACK
		// Las funciones callback en JS ejecutan una siguiente instruccion hasta, y solo hasta que la primera haya terminado
		// En este caso, deseamos ejecutar el alert despues de los 2 segundos que tarda en desaparecer el parrafo
		/*
		$('#oculto').hide(2000)
		alert('El parrafo fue oculto')
		*/

		// Funcion Callback
		// TODOS los metodos jQuery aceptan una funcion que se puede pasar como parametro, esta funcion se conoce como CALLBACK
		// Esta funcion CALLBACK, no se ejecuta hasta que instruccion anterior, es decir, el metodo donde se creo el callback
		// En este caso, el callback ejecuta la funcion alert, y se ejecuta dentro del metodo hide, pero solo despues de que hide se cumple
		$('#oculto').hide(2000, function(){
			alert('El parrafo fue oculto')
		})

	})

	/*
	antes .before() //antes del selector o elemento html
	<selector>
		antes .prepend() // antes del contenido del selector
		CONTENIDO .html() // cambia el contenido, equivale a .innerHtml en html, print en js o echo en php
		despues .append() // despues del contenido del selector
	</selector>
	despues .after() // despues del selector o elemento html
	*/


	$('#boton13').on('click', function(){
		$('p').html('<i>Nuevo contenido</i>')
	})
	$('#boton14').on('click', function(){
		$('p').prepend('<b>Contenido previo dentro del selector - </b>')
	})
	$('#boton15').on('click', function(){
		$('p').append('<b> - Contenido posterior dentro del selector</b>')
	})
	$('#boton16').on('click', function(){
		$('p').before('<div class="antes">Contenido previo fuera del selector</div> ')
		$('.antes').css('background-color', 'magenta')
	})
	$('#boton17').on('click', function(){
		$('p').after(' <div class="despues">Contenido posterior fuera del selector <br></div>')
		$('.despues').css('background-color', 'cyan')
	})
	$('#boton18').on('click', function(){
		$('p')
			.css('font-size', '2rem')
			.css({backgroundColor : 'skyblue'})
	})
	$('#boton19').on('click', function(){
		$('p').css({
			'background-color' : '#EEE',
			borderRadius : '1rem',
			border : 'thick solid #222',
			fontSize : '2rem',
			padding : '1rem',
			'text-shadow' : '.2rem .2rem .5rem #000'
		})
	})

	// Asignamos un objeto al id enlace y varios eventos dentro de un mismo objeto
	// Evento click, mouseover y mouseout
	$('#enlace').on({

		// El unico parametro que acepta una funcion que pertenece a un objeto es 'e' o 'evento'
		click : function(evento){
			// Al parametro de la funcion le asignamos el metodo de JS llamado preventDefault()
			// Este metodo detiene y evita que se active la accion por default de un elemento
			// En este caso, previene la accion por default del enlace con id '#enlace'
			// la accion por default de un elace, si no redirige a ningun lado, es llevar al usuario a la parte superior de la pagina
			evento.preventDefault()
			alert('Se ha prevenido la accion por defecto del enlace')
		},

		mouseover : function(){
			// Se puede agregar una clase css con 'addClass' o 'toggleClass'
			// addClass y removeClass se necesitan para casos en los que se deben realizar tareas especificas
			// $('span').addClass('span-css')
			$('span').toggleClass('span-css')
		},

		mouseout : function(){
			// Se puede remover una clase css con 'addClass' o 'toggleClass'
			// $('span').removeClass('span-css')
			$('span').toggleClass('span-css')
		}
	})


	// Ajax solo puede trabajar con archivos que existen dentro del dominio en el que estamos
	// Es decir, no podria llamar un archivo que se encuentra en otra pagina ajena al entorno del servidor que estamos utilizando
	// Ajax es codigo JS que se ejecuta en un ambiente de servidor
	// Por lo tanto, este codigo por si solo no funcionará, ya que el archivo debe ser ejecutado en un entorno de servidor
	// Para ejecutar este codigo JS levantamos un servidor (en este caso con Node)
	// Descargamos el paquete desde npm despues de instalar Node
	// https://www.npmjs.com/package/http-server
	// Luego de descargar el paquete desde la consola de comandos activamos el servidor
	// Para activar el servidor primero nos ubicamos en la direccion del archivo html que queremos ejecutar en un entorno de servidor
	// Despues usamos el comando http-server
	// Ademas del comando, podemos especificar el puerto a usar con -p y un valor(default Port 8080) un ejemplo de alternativa es 3000
	// Tambien podemos especifica la direccion del servidor con -a (default Address 0.0.0.0), un ejemplo de alternativa es localhost
	// Escribimos la URL en el navegador (en este caso localhost:3000) y tenemos la pagina activa en un entorno de servidor
	$('#boton20').on('click', function(){
		$('#ajax').load('otro.html')
	})
	// Agregamos un efecto fancy utilizando callbacks
	$('#boton21').on('click', function(){
		$('#ajax').load('otro.html', function(){
			$(this)
				.css({display : 'none'})
				.fadeIn(2000)
		})
	})

	$('#que-tecla').on('keyup', function(evento){
		// El metodo '.text' es como el metodo .html o .innerHtml, reemplaza el contenido del selector, pero reemplaza todo de manera literal, no acepta HTML
		// Es decir, no interpreta las etiquetas html como <i> o <p>, los escribe tal cual
		// Aqui, el resultado será, el keyCode de la tecla presionada en el input de id 'codigo-tecla', con las etiquetas <i> escritas de forma literal, no cambiará el texto a itálica porque el metodo '.text' no puede interpretar etiquetas HTML
		$('#codigo-tecla').text('<i> keyCode : '+evento.keyCode+'</i>')
	})

	$('#subir').on('click', function(){
		$('html, body').animate({
			scrollTop : 0,
			scrollLeft : 0
		}, 1000)
	})
}

// El unico parametro que le puedo pasar a una funcion que se ejecuta dentro de un evento en JS es el propio evento(e)
function muevete(evento)
{
	// Cada tecla presionada se muestra por consola (keyboardEvent), esto sirve para saber que tecla fue activada a traves del codigo clave(keyCode) , cada tecla tiene un keyCode(por ej, la barra espaciadora es 32, la tecla j es 74)
	// console.log(evento)
	// alert(evento.keyCode)

	switch(evento.keyCode)
	{
		case 37:
			// Algunas teclas activan ciertos atajos por defecto, como ctr +t crea una pestaña nueva, o alt+D que selecciona toda la URL de mi navegador, las flechas que usamos para mover el pacman mueven el scroll de la ventana
			// De modo que al mover el pacman tambien movemos la ubicacion de la ventana
			// Para evitar esto, utilizamos el evento preventDefault() en cada case
			evento.preventDefault()
			$('#pacman').animate({left : '-=2rem'}, 'swing')
		break
		
		case 38:
			evento.preventDefault()
			$('#pacman').animate({top : '-=2rem'}, 'swing')
		break
		
		case 39:
			evento.preventDefault()
			// No usamos right para movernos a la derecha porque ya usamos left para movernos a la izquierda
			// Una vez elegimos un lado (left o right) seguimos utilizandolo, tanto para movernos a izquierda como derecha
			// Si elegimos left, para movernos a la izquierda usamos negativo (ej: -2rem) y para la derecha positivo (ej: +2rem)
			//('#pacman').animate({right : '+=2rem'}, 'swing')
			$('#pacman').animate({left : '+=2rem'}, 'swing')
		break

		case 40:
			evento.preventDefault()
			$('#pacman').animate({top : '+=2rem'}, 'swing')
		break

	}
}

// DetectarScroll se encarga de mostrar/ocultar el boton para volver a la parte superior de la pagina una vez bajamos el scroll hasta cierto numero de pixeles
function detectarScroll()
{
	var scrollVertical = $(window).scrollTop(), 
		scrollHorizontal =$(window).scrollLeft()

	// Mostramos por consola la ubicacion del scroll vertical y horizontal en pixeles
	//console.log(scrollVertical, scrollHorizontal)

	// Utilizamos operador ternario como opcion al if else para mostrar el boton o no
	// return(condition) ? true : false
	return(scrollVertical > 450) ? $('#subir').fadeIn() : $('#subir').fadeOut()
}

function responsiveDesign()
{
	// innerWidth-innerHeight-outerWidth-outerHeight son metodos jQuery que ademas del ancho del elemento(un div, un article, etc), tienen (o no) en cuenta cosas como el margen, padding y borde a la hora de medir el ancho o alto de un elemento
	var anchoPantalla = $(window).innerWidth(),
		altoPantalla = $(window).innerHeight()

	//No se muestra hasta redimensionar la pantalla
	console.log(anchoPantalla, altoPantalla)

	// Ancho para dispositivos moviles
	if(anchoPantalla <= 480)
	{
		$('.item').removeClass('dos-columnas tres-columnas cuatro-columnas')
	}
	// Ancho para dispositivos moviles en horizontal y tablets en vertical
	else if(anchoPantalla <= 768)
	{
		$('.item')
			.addClass('dos-columnas')
			.removeClass('tres-columnas cuatro-columnas')
	}
	// Ancho para tabletas en horizontal y algunas computadoras de escritorio
	else if(anchoPantalla <= 1024)
	{
		$('.item')
			.addClass('tres-columnas')
			.removeClass('dos-columnas cuatro-columnas')
	}
	// Cualquier cosa mas ancha ya es computadora de escritorio
	else
	{
		$('.item')
			.addClass('cuatro-columnas')
			.removeClass('dos-columnas tres-columnas')
	}
}

//document de manera semantica si funciona
$(document)
	// .on('ready', efectos)
	.ready(efectos)
	// el evento Keydown se activa al presionar una tecla
	.on('keydown', muevete)
	// .keydown(muevete)

// Trabajamos con dos eventos importantes del elemento window, scroll y redimensionamiento
$(window)
	.on('scroll', detectarScroll)
	// No se activa hasta redimensionar la pantalla, a menos que agregemos el evento load
	// Podemos activar los eventos por separado, o ambos a la vez
	// .on({
	// 		resize : responsiveDesign,
	// 		load : responsiveDesign
	// })
	.on('resize load', responsiveDesign)