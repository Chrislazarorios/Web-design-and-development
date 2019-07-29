function Ship(){
	this.x = width/2;
	this.xdir = 0;

	this.show = function(){
		fill(255);
		rectMode(CENTER);
		rect(this.x,height-20,20,60);
		// image(ship, this.x, this.y);
	}

	this.setDir = function(dir){
		this.xdir = dir;
	}

	this.move = function(dir){
		this.x += this.xdir*5;
	}

	// how to make an element grow
	// this.grow = function(){
	// 	this.radius = this.radius + 2;
	// }
}