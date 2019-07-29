function Alien(x, y){
	this.x = x;
	this.y = y;
	this.radius = 30;
	this.toDelete = false;
	this.xdir = 1;



	this.grow = function(){
		this.radius = this.radius + 2;
	}

	this.shiftDown = function(){
		this.xdir *= -1;
		this.y += this.radius; 
	}

	this.move = function(){
		this.x = this.x + this.xdir;
	}

	this.show = function(){
		noStroke();
		fill(255,0,200,150);
		ellipse(this.x,this.y,this.radius*2,this.radius*2);
	}

	this.death = function(){
		this.toDelete = true;
	}

	this.hits = function(shot){
		var d = dist(this.x, this.y, shot.x, shot.y);
		if(d < this.radius + shot.radius){
			return true;
		}
		else{
			return false;
		}
	}
}