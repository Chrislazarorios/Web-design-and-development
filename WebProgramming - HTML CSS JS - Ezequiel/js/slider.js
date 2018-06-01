//pasa a tener todos los conocimientos de model porque es una peudo clase. hago una nueva referencia
var datos = new Model () ;
//reemplazo por los datos de model 
/*  var images = [
						  "img/Human.jpg"
						,"img/Orc.jpg"
						 ,"img/Undead.jpg"
					]
 */
var images = datos.images;

var controller      = new IndexController();
	  controller.setLength(images.length);
	  
document.onkeydown = function(event) {
    switch (event.keyCode) {
        case 37:
            controller.prev();
			clearInterval(autoId);
            break;
        case 39:
           controller.next();
		   clearInterval(autoId);
            break;
    }
};
function Slider(controller){
	var imageWidth  = datos.imageWidth;
	var imageHeight = datos.imageHeight;

	var idContainer   = datos.idContainer;
	var container       = document.getElementById(idContainer);
		  container.style.width = (controller.getLength()*imageWidth) + "px";
	 
	 var currentPosition = 0;
	 var finalPosition      = controller.getIndex()*imageWidth;
	 // carga las imagenes
	 var names = datos.buttonsList;
	for(var index = 0; index < controller.getLength(); index++){
	
		var img = new ImageLoader( images[index], imageWidth, imageHeight);
			img.addChildById(idContainer);
	}
	
	var onIndexChange = function(index, length){
		finalPosition  = controller.getIndex()*imageWidth;
	}
	
	var move = function(){
		currentPosition += ( finalPosition- currentPosition ) / datos.rateAnimation;
		container.style.left = -currentPosition+"px";
	}
	
	controller.addCallback(onIndexChange, this);
	
	setInterval(move, 10);
}


function Botonera (indexContoller){

	var buttonsList = [];
	var totalButtons = datos.buttonsList.length;
	
	var onChange = function(currentIndex, lentgh){
		for(var index=0; index < totalButtons; index++){
			buttonsList[index].classList.remove("button-active");
		}
		
		buttonsList[currentIndex].classList.add("button-active");
	}
	var buttonsContainer = document.getElementById ("Nav");
	var nameList = datos.buttonsList;
	for(var index = 0; index < totalButtons; index++){
	
		var button = document.createElement ("span");
			buttonsList.push(button);
			button.innerHTML = nameList[index];
			button.onclick = function(event){
			indexContoller.setIndex(0);
			clearInterval(autoId);
				
			}
		buttonsContainer.appendChild(button);
	}
	indexContoller.addCallback(onChange, this);
}

var slider = new Slider(controller);
	  
	  
var botonera = new Botonera(controller);
	  
controller.setIndex(1);


function moverAutomatico (){
	if(controller.getIndex() == controller.getLength()-1){
		controller.setIndex(0);
	}else{
		controller.next();
	}
}

var autoId = setInterval(moverAutomatico, datos.automaticMiliseconds);

