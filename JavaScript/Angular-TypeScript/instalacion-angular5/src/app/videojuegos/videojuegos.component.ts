import {Component} from '@angular/core';

@Component({
	selector: 'videojuegos',
	/* hay dos formas de mostrar elementos en el tmeplate, colocando los elementos html en el template, o pasandole la direccion de carpeta */
	/* en este caso, el template tiene directamente escritos los tags html dentro suyo

		template: `
	<h2>Componente de {{nombre}}</h2>

	<!--   Los tags html solo se ejecutan si se cumple la condicion que contienen -->
	<h3 *ngIf = "mostrar_retro != true">El mejor juego es {{mejor_juego}}</h3>

	<!--  ngIF no tiene valor true o false especificado, aplica por defecto true -->
	<h3 [style.background]= "color" 
		*ngIf = "mostrar_retro">
		El mejor juego es {{mejor_juego_retro}}
	</h3>


	<h2>Listado de videojuegos</h2>
	<ul>
		<li *ngFor="let game of videojuegos">{{game}}</li>
	</ul>
	`
	*/
	templateUrl: './videojuegos.component.html'
})

export class VideojuegosComponent {
	public nombre:string;
	public mejor_juego:string;
	public mejor_juego_retro:string;
	public mostrar_retro:boolean;
	public color:string;
	public year:number;

	public videojuegos:Array<any>;

	constructor(){
		this.nombre = 'Videojuegos 2019';
		this.mejor_juego = 'The Witcher 3';
		this.mejor_juego_retro = 'Pokemon Ruby';
		this.mostrar_retro = false;
		this.color = "yellow";
		this.year = 2019;
		this.videojuegos = [
			'Mortal Kombat',
			'Warcraft 3',
			'Street Fighter',
			'Free Fire',
			'Assasins Creed'
		];
	}
}