function isNumber(number){
	return typeof number == "number";
}

function ImageLoader(url, width, height){
	//crear el elmento img
	var img = document.createElement("img");
	 
	// hacemos visible a url desde fuera del objeto
	this.url = url;
	
	// guardamos la referencia de this del contexto original
	// para que sea alcanzada desde cualquier otro contexto.
	var self  = this;
	 
	// escucha del evento: load (cuando se cargó) 
	var onImageLoad = function(event){
		var isOk;
		
		isOk = isNumber(width);
		if(isOk){
			img.width = width;
		}
		
		isOk = isNumber(height);
		if(isOk){
			img.height = height;
		}
		
		
	}
	//asignar un escucha a img
	img.addEventListener("load", onImageLoad);
	
	//asignarle una url
	img.src = url;

	// Le ponemos this, para que sea
	// accesible desde fuera del objeto.
	this.addChildById = function (containerId){
		if(null != containerId){
			//obtener un div por el id
			var container = document.getElementById(containerId);

			//meter el img adenrto de ese id
			container.appendChild(img);
		}
	}
}

function IndexController (){
	/* PROPIEDADES PRIVADAS */
	var _callbacksList = [];
	var _length            = 0;
	var _index             = 0;
	
	/* HELPERS */
	var triggercallbacks = function(){
		var data;
		var context;
		var callback;
		var length = _callbacksList.length;
		
		for(var index=0; index < length; index++){
			data = _callbacksList[index];
			context  = data.context;
			callback = data.callback;
			callback.apply(context, [_index, _length]);
		}
	}
	
	/* INTERFAZ DEL OBJETO */
	this.setLength = function(value){
		if( isNumber(value) ){
			_length = value;
		}
	}
	
	this.getLength = function(){
		return _length;
	}
	
	this.setIndex = function(value){
		var isNotANumber = !isNumber(value);
		if(isNotANumber || _length == 0){
			// Sino es un número, o el _length es cero, frenamos la función
			return;
		}
		
		var index;
		// Para que el valor nunca sea mayor al _length-1
		index = Math.round(Math.min(_length-1, value));
		index = Math.max(0, index);
		
		// Si el valor de _index vaa ser diferentes...
		if(index != _index){
			// cambiar _index
			_index = index;
			// Avisar a todos que cambio
			triggercallbacks();
		}
	}
	
	this.getIndex  = function(){
		return _index;
	}
	
	this.next = function(){
		this.setIndex(_index+1);
	}
	
	this.prev = function(){
		this.setIndex(_index-1);
	}
	
	this.addCallback = function(callback, context){
		var data;
		var length = _callbacksList.length;
		for(var index=0; index < length; index++){
			data = _callbacksList[index];
			
			//Si ya existe, no agregamos nada
			var areEquals = callback == data.callback && context == data.context;
			if(areEquals){
				return
			}
		}
		
		data = {
						 callback:callback
						,context:context
					}
		
		_callbacksList.push(data);
	}
	
	this.removeCallback = function(callback, context){
		var data;
		var length = _callbacksList.length;
		for(var index=0; index < length; index++){
			data = _callbacksList[index];
			
			//Si existe removemos el callback
			var areEquals = callback == data.callback && context == data.context;
			if(areEquals){
				_callbacksList.splice(index, 1);
			}
		}
	}
}