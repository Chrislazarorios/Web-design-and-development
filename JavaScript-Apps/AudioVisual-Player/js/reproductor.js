var maximo, mmedio, reproducir, barra, progreso, silenciar, volumen, bucle;

function iniciar(){
    maximo = 400;
    mmedio = document.getElementById('medio');
    reproducir = document.getElementById('reproducir');
    barra = document.getElementById('barra');
    progreso = document.getElementById('progreso');
    silenciar = document.getElementById('silenciar');
    volumen = document.getElementById('volumen');

    reproducir.addEventListener('click', playPause); //cambiar
    silenciar.addEventListener('click', mudo); //sonido
    barra.addEventListener('click', barChange); //mover
    volumen.addEventListener('change', soundLvl); //nivel
}

function playPause(){
    if(!mmedio.paused && !mmedio.ended){
        mmedio.pause();
        reproducir.value = '>';
        clearInterval(bucle);
    }
    else{
        mmedio.play();
        reproducir.value = 'Pause';
        bucle = setInterval(estado, 1000);
    }
}

function estado(){
    if(!mmedio.ended){
        var tamano = parseInt(mmedio.currentTime * maximo / mmedio.duration);
        progreso.style.width = tamano + 'px';
    }
    else{
        progreso.style.width = '0px';
        reproducir.innerHTML = '>';
        clearInterval(bucle);
    }
}

function barChange(e){
    if(!mmedio.paused && !mmedio.ended){
        var ratonX = e.pageX - barra.offsetLeft;
        var nuevoTiempo = ratonX * mmedio.duration / maximo;
        mmedio.currentTime = nuevoTiempo;
        progreso.style.width = ratonX + 'px';
    }
}

function mudo(){
    if(silenciar.value == 'Mute'){
        mmedio.muted = true;
        silenciar.value = 'Audio';
    }
    else{
        mmedio.muted = false;
        silenciar.value = 'Mute';
    }

}

function soundLvl(){
    mmedio.volume = volumen.value;
}

addEventListener('load', iniciar);

