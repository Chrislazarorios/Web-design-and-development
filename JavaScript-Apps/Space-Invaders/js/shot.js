function Shot(x, y){
	this.x = x;
	this.y = y;
	this.radius = 8;
	//flag to determine if the shot disappears or not
	this.toDelete = false;

	this.show = function(){
		noStroke();
		fill(150,0,255);
		ellipse(this.x, this.y, this.radius*2, this.radius*2);
	}

	// how to disappear an element
	this.disappear = function(){
		this.toDelete = true;
	}

	this.hits = function(alien){
		var d = dist(this.x, this.y, alien.x, alien.y);
		if(d < this.radius + alien.radius){
			return true;
		}
		else{
			return false;
		}
	}

	this.move = function(){
		this.y = this.y - 5;
	}
}