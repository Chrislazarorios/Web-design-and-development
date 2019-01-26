//Aislamos los datos que usa el slider y los guardamos en un objeto
function Model () {
	this.images = [
							 "img/Human.jpg"
							,"img/Orc.jpg"
							,"img/Undead.jpg"
							,"img/NightElf.jpg"
					]

	this.buttonsList = ["button0", "button1", "button2","button3"];

	this.imageWidth  = 700;

	this.imageHeight = 500;

	this.rateAnimation=30;
	
	this.automaticMiliseconds=3000;

	this.idContainer = "ImageContainer";
	
	this.lastIndex=0;
}

function LocalData (dataName) {
	var DATA_NAME = dataName;
	var _data;

	try {
		_data = localStorage.getItem(DATA_NAME);
	}catch(error){
		console.log("The browser configuration doesnt let data storage");
	}
	
	try {
		_data = JSON.parse(_data);
	}catch(error){
		console.log("There is no data saved");
		_data = null;
	}
	
	_data = null == _data ? {} : _data;
	
	this.getData = function() {
		return _data
	}

	this.deleteData = function () {
		localStorage.removeItem(DATA_NAME);
	}

	this.flush = function() {
		localStorage.setItem(DATA_NAME, JSON.stringify(_data));
	}

	this.clear = function() {
		localStorage.clear();
	}
}