import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  /* hay dos formas de mostrar elementos en el template, colocando los elementos html en el template, o pasandole la ubicacion de la carpeta */
  /* en este caso, el template pasa la ubicacion de la carpeta */
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  public title = 'instalacion-angular5 - Udemy Course';

  public description = 'Curso de introduccion a Angular 5';
}