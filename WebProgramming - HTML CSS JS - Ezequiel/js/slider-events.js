var images = [
						 "img/Human.jpg"
						,"img/Orc.jpg"
						,"img/Undead.jpg"
					]

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
	var imageWidth  = 700;
	var imageHeight = 500;

	var idContainer   = "ImageContainer";
	var container       = document.getElementById(idContainer);
		  container.style.width = (controller.getLength()*imageWidth) + "px";
	 
	 var currentPosition = 0;
	 var finalPosition      = controller.getIndex()*imageWidth;
	 // carga las imagenes
	for(var index = 0; index < controller.getLength(); index++){
	
		var img = new ImageLoader( images[index], imageWidth, imageHeight);
			img.addChildById(idContainer);
	}
	
	var onIndexChange = function(index, length){
		finalPosition  = controller.getIndex()*imageWidth;
	}
	
	var move = function(){
		currentPosition += ( finalPosition- currentPosition ) / 30;
		container.style.left = -currentPosition+"px";
	}
	
	controller.addCallback(onIndexChange, this);
	
	setInterval(move, 10);
}


function Botonera (indexContoller){
	var button0 = document.getElementById("button0");
	button0.onclick = function(event){
		indexContoller.setIndex(0);
		clearInterval(autoId);
	}

	var button1 = document.getElementById("button1");
	button1.onclick = function(event){
		indexContoller.setIndex(1);
		clearInterval(autoId);
	}
	
	var button2 = document.getElementById("button2");
	button2.onclick = function(event){
		indexContoller.setIndex(2);
		clearInterval(autoId);
	}
	
	var buttonsList = [button0, button1, button2];
	var totalButtons = buttonsList.length;
	
	var onChange = function(currentIndex, lentgh){
		for(var index=0; index < totalButtons; index++){
			buttonsList[index].classList.remove("button-active");
		}
		
		buttonsList[currentIndex].classList.add("button-active");
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

var autoId = setInterval(moverAutomatico, 2000);
