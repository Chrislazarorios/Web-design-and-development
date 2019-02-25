// Plugin para cambiar los colores y la letra

// Los parentesis siempre acompañan a la función (function())
// Tambien a métodos (hide())
// Los parentesis significan accion, al colocarlos junto al metodo hide, le estoy diciendo que oculte algo
// A esos parametros puedo asignarle valores, en el caso de hide, puedo darle un tiempo para que se ejecute o una funcion callback
// hide(1000, function(){})


// Creamos una función ANÓNIMA AUTOEJECUTABLE
// Una función es anónima cuando no tiene nombre
// Las funciones autoejecutables no esperan un document.ready ni nada, se ejecuta automaticamente cuando el codigo HTML lee la linea de codigo que invoca el archivo donde esta escrito el plugin (jquery.plugin.js)
// Hay tres formas de volverla autoejecutable
// 1º forma
// El primer parametro es la funcion a ejecutar
// El segundo parametro es el objeto jQuery
// Para que la funcion anonima tome el objeto jQuery del segundo parametro, y de esta forma, ligar el primer parentesis con el segundo, agregamos un valor como parametro en la primer funcion que este relacionado con el objeto del segundo parentesis
// En este caso utilizamos el simbolo $ para ligar la funcion del primer parentesis con el objeto jQuery del segundo parentesis
// Si usamos diferentes librerias/tecnologias para crear plugins, lo mas apropiado es encapsular cada funcion(autoejecutable o no) por separado
// De esta forma, evitamos mezclar codigo jQuery, Angular, Backbone, etc (no es recomendable mezclar tantas tecnologias)
// Por ej, si crearamos otra funcion autoejecutable con angular
// (function($){})(Angular)
// Pero lo que estamos haciendo aqui, es decirle que todo lo que va dentro de los parentesis de la funcion anonima es programacion jQuery
// Y que ademas, el objeto jQuery, lo vamos a reconocer con el simbolo '$'
(function($){
	//$('#contenido').hide(3000)
	// Ahora que sabemos que debemos encapsular el codigo del plugin en una función anónima autoejecutable, podemos concentrarnos en el aspecto hereditario, o expandible de los plugin
	// Los plugin son una funcionalidad extendida de la libreria jQuery
	// Nuestro plugin hereda todas las caracteristicas de jQuery con el metodo 'jQuery.fn.extend()' (fn se refiere a function, podemos reemplazar el jQuery con el simbolo $)
	$.fn.extend({
		// Desarrollamos el componente llamado plugin
		// Lo siguiente es nombrar nuestro plugin(componente), en este caso, como el nombre 'jquery.plugin.js' indica, el nombre es plugin
		// El parametro 'opcionesUsuario' recibe la eleccion de estilos que desea aplicar el usuario, por lo que los estilos pueden cambiar muchas veces
		plugin : function(opcionesUsuario)
		{	
			// Al crear un plugin, se deben tener en cuenta 4 pasos
			
			// 1º Creacion de parametros iniciales
			// Opciones por default
			// Opciones por defecto del componente (opciones con las que va a cargar predeterminadamente y que mas adelante el usuario puede modificar)
			// Lo creamos como objeto
			var opcionesIniciales = {
				fondo : 'orangered',
				colorLetra : 'navy',
				letra : '2rem'
			},
				// 2º Mezcla de parametros iniciales con los que me mande el usuario 
				// Tambien creamos una variable llamada opc
				// Como sabe el plugin que opcion elegir? si las opciones por defecto o las que elija el usuario
				// La variable opc sirve para comprobar lo siguiente
				// Si el usuario no mandó ningun parametro, entonces se cargan los valores por default(objeto opcionesIniciales)
				// Si el usuario envia un parametro con, por ejemplo, solo colorLetra, la variable 'opc' toma 'fondo' y 'letra' de los valores por default, pero aplica el colorLetra que haya pasado el usuario
				// De esta forma, se crea un plugin dinamicamente entre los valores por defecto y los parametros que el usuario elija
				// Esta mezcla de valores por default y seleccionados se logra con el metodo 'jQuery.extend()'
				// $.extend() nos permite extender las opciones iniciales del plugin con las que posiblemente mande el usuario
				opc = $.extend(opcionesIniciales, opcionesUsuario)

			// 3º Crear una funcion constructora de mi plugin
			// Es decir, la funcion que ejecuta, lo que vaya a hacer mi plugin
			// El constructor de una clase es el metodo que inicializa esa clase en los objetos que la utilizan
			// En algunos plugins de programacion jQuery o JS encontraremos el constructor como la funcion init (de inicializar) o como la funcion super
			// Funcion constructora del plugin (componente) donde ira toda la programacion del mismo
			// Por cada elemento (que este en el HTML) que vaya a ejecutar el plugin se debe ejecutar la funcion constructora
			// Es decir, se ejecuta la funcion constructora cada vez que un elemento en el HTML ejecuta el plugin
			// Por ejemplo, si en el HTML tengo un menu de navegacion con cinco enlances, y los cinco enlaces ejecutan el plugin, el plugin tiene que ejecutarse cinco veces
			// Para ejecutar el constructor el numero de veces que sea necesario tenemos el metodo 'each'
			// A veces, el metodo 'each', que pertenece al 4º paso, se encuentra junto al 3º paso, que es el constructor
			function inicializar()
			{
				// alert('funciona mi plugin')
				// El plugin cambia los estilos CSS al elemento(que se encuentra en el documento HTML) que lo esta ejecutando
				// Cambiamos los estilos CSS con el metodo .css
				$(this).css({
					backgroundColor : opc.fondo,
					color : opc.colorLetra,
					fontSize : opc.letra
				})
			}

			// En algunos plugins, el tercer paso (constructor) esta unido al cuarto paso utilizando una funcion anónima
			// Sin embargo, el uso de funciones anónimas debe reservarse para funciones que posean pocas lineas de codigo, o sean casos en los que solo se ejecute una unica funcion por tarea, sin posibilidad de variantes
			// Pero acá, que estamos creando un componente, no es recomendable utilizar una funcion anónima ya que puede contener varias lineas de codigo
			// return $(this).each(function (){
				//code..
			// })

			// 4º Utilizar el metodo 'each' para ejecutar el constructor cada vez que un elemento en el codigo HTML ejecute mi plugin
			// Por cada objeto que ejecute mi plugin se debe ejecutar la funcion constructora(inicializar)
			return $(this).each(inicializar)
		}
	})

	
})(jQuery)
// Asi como el simbolo '$' representa al objeto jQuery, si utilizamos otra libreria, por ejemplo, Underscore, lo representariamos con el simbolo '_'
// (function(_){
//	_('#contenido').hide(3000)
// })(Underscore)