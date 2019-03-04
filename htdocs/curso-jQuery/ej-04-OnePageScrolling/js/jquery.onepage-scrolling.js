// Creamos una funcion anonima autoejecutable
(function($){
	$.fn.extend({
		onePageScrolling : function(opcionesUsuario) {
			var opcionesIniciales = {},
				opc = $.extend(opcionesIniciales, opcionesUsuario)

			function inicializar()
			{
				// alert('funciona')
				function aDondeScroll()
				{

				}

				function colorBordeCabeceraActual()
				{

				}

				$(this)
					.on('click', aDondeScroll)
					.on('click', colorBordeCabeceraActual)
			}

			return $(this).each(inicializar)
		}
	})
})(jQuery)