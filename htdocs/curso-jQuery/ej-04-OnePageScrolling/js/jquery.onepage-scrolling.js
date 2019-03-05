// Creamos una funcion anonima autoejecutable
(function($){
	// Extiendo las propiedades de jQuery al plugin onePageScrolling
	$.fn.extend({
		// Desarrollo el plugin
		onePageScrolling : function(opcionesUsuario) {
			// 1º paso opciones default
			var opcionesIniciales = {
				velocidad : 1000
			},
				// 2º paso fusion de opciones default y usuario
				opc = $.extend(opcionesIniciales, opcionesUsuario)

			// 3º paso desarrollo funcion constructora
			function inicializar()
			{
				// alert('funciona')

				// Usamos el metodo jQuery '.attr' (attribute) para obtener el id de cada enlace
				// Al obtener el id(jqy,jqm,jqu, etc) el metodo me dirije a esa parte de la pantalla mediante scroll
				// Con attr obtiene las coordenas del id obtenido
				function aDondeScroll(evento)
				{
					evento.preventDefault()

					// This es el objeto HTML que en ese momento ejecuta el plugin
					// En la variable idEnlace guardamos el resultado del metodo '.attr' que nos devuelve el id del parametro que le pasamos
					// '.attr' es un metodo que puede recibir uno o dos parametros, si le pasamos un parametro, nos devuelve el valor que contiene el parametro(en este caso href, que contiene los ids de los links)
					// En cambio, si al metodo '.attr' le pasamos dos parametros, lo que hace el segundo parametro es asignar un valor al primer parametro
					// Por lo tanto, el metodo '.attr' es capaz de devolver un valor, o de asignarlo, dependiendo de la cantidad de parametros (1 o 2)
					var idEnlace = $(this).attr('href'),
						// en la variable coordSeccion guardamos el resultado del metodo '.offset' que nos devuelve las coordenadas del atributo que le pasamos en idEnlace
						coordSeccion = $(idEnlace).offset().top

					// Comprobamos el id que obtenemos a partir del metodo .attr
					//console.log(idEnlace , coordSeccion)	

					$('html, body').animate({
						scrollTop : coordSeccion
					}, opc.velocidad)

				}

				function colorBordeCabeceraActual()
				{
					// Del objeto que active el plugin obtener (con .attr) el valor de su atributo 'data-borde'
					var borde = $(this).attr('data-borde')

					// En este caso la cabecera tiene una clase llamada fixed-nav
					// Por lo tanto, jQuery, a traves de css, a la cabecera fixed-nav, asigna a la propiedad color de borde inferior, el valor de la variable borde
					$('.fixed-nav').css({ borderBottomColor : borde })

				}

				function seccionActual()
				{
					$('.one-page').removeClass('actual')
					
					// console.log( $(this).attr('class') )

					// Es un boolean, devuelve true solo si tiene la clase buscada
					console.log( $(this).hasClass('logo') )

					// if( $(this).attr('class') != 'logo' )
					// Cuando no (!) tenga la clase logo, asignar la clase 'actual'
					if(!$(this).hasClass('logo'))
					{
						$(this).addClass('actual')
					}
				}

				// Se ejecutan tres funciones dentro de la funcion constructora, por lo tanto retorna tres eventos que se activan on click
				$(this)
					.on('click', aDondeScroll)
					.on('click', colorBordeCabeceraActual)
					.on('click', seccionActual)
			}

			// 4º paso retorno el plugin (onePageScrolling) junto al metodo '.each' con la funcion constructora como parametro
			return $(this).each(inicializar)
		}
	})
})(jQuery)