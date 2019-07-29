var ship;
var aliens = [];
var aliens2 = [];
var shots = [];

// function preload(){
// 	ship = loadImage('img/ship.png');
// }


function setup() {
	createCanvas(600,400);
	ship = new Ship();
	// shot = new Shot(width/2, height/2);
	for (var i = 0; i < 6; i++) {
		aliens[i] = new Alien(i*80+80, 60);
	}

	for (var i = 0; i < 4; i++) {
		aliens2[i] = new Alien((i+1)*80+80, 140);
	}

}

function draw() {
	background(51);
	//show and constantly move ship
	ship.show();
	ship.move();

	// show and move shots
	for (var i = 0; i < shots.length; i++) {
		shots[i].show();
		shots[i].move();
		//check if shots hits alien
		for (var j = 0; j < aliens.length; j++) {
			if(shots[i].hits(aliens[j])){
				console.log("BOOM");
				// aliens[j].grow();
				shots[i].disappear();
				aliens[j].death();
			}	
		}

		for (var j = 0; j < aliens2.length; j++) {
			if(shots[i].hits(aliens2[j])){
				console.log("BOOM2");
				// aliens[j].grow();
				shots[i].disappear();
				aliens2[j].death();
			}	
		}
	}
	//show and move aliens

	//flag to check if array of aliens should be moved down after hitting the edge
	var edge = false;
	
	for (var i = 0; i < aliens.length; i++) {
		aliens[i].show();
		aliens[i].move();
		if(aliens[i].x > width || aliens[i].x < 0){
			edge = true
		}
	}
	for (var i = 0; i < aliens2.length; i++) {
		aliens2[i].show();
		aliens2[i].move();
		if(aliens2[i].x > width || aliens2[i].x < 0){
			edge = true
		}
	}

	//aliens shiftDown
	if(edge){
		for (var i = 0; i < aliens.length; i++) {
			aliens[i].shiftDown();
		}
	}

	if(edge){
		for (var i = 0; i < aliens2.length; i++) {
			aliens2[i].shiftDown();
		}
	}

	//shots disappeareance
	for (var i = shots.length-1; i >= 0; i--) {
		if(shots[i].toDelete){
			//splice removes an element from an array
			// arguments define which element in the array (index)(i) and how many should be removed (1)
			shots.splice(i,1);
		}
	}

	// aliens death
	for (var i = 0; i < aliens.length; i++) {
		if(aliens[i].toDelete){
			aliens.splice(i,1);
		}
	}
	for (var i = 0; i < aliens2.length; i++) {
		if(aliens2[i].toDelete){
			aliens2.splice(i,1);
		}
	}

	
}

function keyReleased(){
	if(key != ' '){
		ship.setDir(0);	
	}
	
}

function keyPressed() {
	if(key === ' '){
		var shot = new Shot(ship.x, height);
		shots.push(shot);
	}

	if(keyCode === RIGHT_ARROW) {
		ship.setDir(1);
	}
	else if(keyCode === LEFT_ARROW){
		ship.setDir(-1);
	}
}