let ataqueJugador
let ataqueEnemigo


function iniciarJuego() {
    let botonMascotaJugador = document.getElementById('boton-mascota');
    botonMascotaJugador.addEventListener('click', seleccionarMascotaJugador);

    let botonFuego = document.getElementById('boton-fuego');
    botonFuego.addEventListener('click', ataqueFuego);
    let botonAgua = document.getElementById('boton-agua');
    botonAgua.addEventListener('click', ataqueAgua);
    let botonTierra = document.getElementById('boton-tierra');
    botonTierra.addEventListener('click', ataqueTierra);
}

function seleccionarMascotaJugador() {
    let inputHipodoge = document.getElementById('hipodoge');
    let inputCapipepo = document.getElementById('Capipepo');
    let inputRatigueya = document.getElementById('ratigueya');
    let spanMascotaJugador = document.getElementById('mascota-jugador');
    
    if (inputHipodoge.checked) {
        spanMascotaJugador.innerHTML = 'Hipodoge';
    } else if (inputCapipepo.checked) {
        spanMascotaJugador.innerHTML = 'Capipepo';
    } else if (inputRatigueya.checked) {
        spanMascotaJugador.innerHTML = 'Ratigueya';
    } else {
        alert('Selecciona una mascota');
    }

    seleccionarMascotaEnemigo()
}

function seleccionarMascotaEnemigo() {
    let MascotaAleatoria = aleatorio(1,3);
    let spanMascotaEnemigo = document.getElementById('mascota-enemigo');

    if (MascotaAleatoria == 1) {
        spanMascotaEnemigo.innerHTML = 'Hipodoge';
    } else if (MascotaAleatoria == 2) {
        spanMascotaEnemigo.innerHTML = 'Capipepo';
    } else {
        spanMascotaEnemigo.innerHTML = 'Ratigueya';
    }
}

function ataqueFuego() {
    ataqueJugador = 'FUEGO';
    ataqueAleatorioEnemigo();
}
function ataqueAgua() {
    ataqueJugador = 'AGUA';
    ataqueAleatorioEnemigo();
}
function ataqueTierra() {
    ataqueJugador = 'TIERRA';
    ataqueAleatorioEnemigo();
}

function ataqueAleatorioEnemigo() {
    let ataqueAleatorio = aleatorio(1, 3);
    if(ataqueAleatorio == 1){
        ataqueEnemigo = 'FUEGO';
    } else if (ataqueAleatorio == 2){
        ataqueEnemigo = 'AGUA';
    } else {
        ataqueEnemigo = 'TIERRA';
    }

    combate();
}

function combate() {
    let spanVidasJugador = document.getElementById('vidas-jugador')
    let spanVidasEnemigo = document.getElementById('vidas-enemigo')

    if ( ataqueEnemigo == ataqueJugador) {
        crearMensaje("EMPATE");
    } else if (ataqueJugador == 'FUEGO' && ataqueEnemigo == 'TIERRA' ) {
        crearMensaje("GANASTE");
    } else if (ataqueJugador == 'AGUA' && ataqueEnemigo == 'FUEGO' ) {
        crearMensaje("GANASTE");
    } else if (ataqueJugador == 'TIERRA' && ataqueEnemigo == 'AGUA') {
        crearMensaje("GANASTE");
    } else {
        crearMensaje("PERDISTE");
        spanVidasJugador.innerHTML = 
    }
}



function crearMensaje(result) {
    let sectionMensajes = document.getElementById('mensajes');
    let parrafo = document.createElement('p');
    parrafo.innerHTML = 'Tu mascota ataco con ' + ataqueJugador + ', la mascota del enemigo ataco con ' + ataqueEnemigo + ' por lo tanto ' + result;

    sectionMensajes.appendChild(parrafo);
}


function aleatorio(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

window.addEventListener('load', iniciarJuego); //IniciarJuego es la funcion que se ejecuta al momento de terminar de cargar el html, en este caso 'load'

/*
addEventListener (El método addEventlistener, es un escuchador que indica al navegador que este atento a la interacción del usuario. La ventaja es que se escribe totalmente en el JS, sin necesidad de tocar el HTML.)
checked (consultamos si se encuentra seleccionado)
innerHTML (metodo que nos permite modificar el html)
createElement ()
appendChild

addEventListener escucha muchos metodos, averiguar sobre estos...


*/



