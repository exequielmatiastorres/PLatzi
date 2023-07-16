let nombre = prompt("Cual es tu nombre?")

alert("Bienvenido " + nombre)

min = 1;
max = 3;

n = Math.floor(Math.random()*(max-min+1)+min)//algoritmo genera un numero entre el max y el min

//FUNCIÓN PARA LAS ALERTAS
function alertaDeElecciones( quienElije , eleccion ) {
    if ( eleccion == 1 ) {
        alert( "El " + quienElije + " eligió 🥌" );
    } else if ( eleccion == 2 ) {
        alert( "El " + quienElije + " eligió 📄" );
    } else if ( eleccion == 3 ) {
        alert( "El " + quienElije + " eligió ✂️" );
    } else {
        alert( "Hubo un error con la elección del " + quienElije + " 🙃" );
    }
}

//FUNCIÓN PARA GENERAR NÚMEROS ALEATORIOS
function numeroAleatorio( min , max ) {
    return Math.floor( Math.random() * ( max - min + 1 ) + min );
}

//FUNCIÓN PARA DECIDIR EL GANADOR
function quienGanaEntre ( eleccionJugador , eleccionOponente ) {
    if ( eleccionJugador == eleccionOponente ) {
        alert( "¡EMPATE! 🤼" );
    } else if ( eleccionJugador == 1 && eleccionOponente == 3 ) {
        alert( "¡GANASTE! 🥳" );
    } else if ( eleccionJugador == 2 && eleccionOponente == 1 ) {
        alert( "¡GANASTE! 🥳" );
    } else if ( eleccionJugador == 3 && eleccionOponente == 2 ) {
        alert( "¡GANASTE! 🥳" );
    } else {
        alert( "PERDISTE... 😢" );
    }
}

//ELECCIÓN DEL JUGADOR
let eleccionDelJugador = 0;
eleccionDelJugador = prompt( "Elige: 1 para 🥌, 2 para 📄, 3 para ✂️" );
alertaDeElecciones( "jugador" , eleccionDelJugador );

//ELECCIÓN DEL COMPUTADOR
let eleccionDelComputador = numeroAleatorio( 1 , 3 );
alertaDeElecciones( "computador" , eleccionDelComputador );

//DECIDIENDO EL GANADOR
quienGanaEntre ( eleccionDelJugador , eleccionDelComputador );

/*

Math.floor (para quitar decimales)
Math.random(crea un numero aleatorio)




Operador	Significado
==	Retorna “verdadero” si un lado es igual al otro (Ojo, NO distingue entre números y strings. Por lo tanto: 3 == “3” //verdadero).
===	Retorna “verdadero” si un lado es estrictamente igual al otro (Ojo, SÍ distingue entre números y strings. Por lo tanto: 3 === “3” //falso).
!=	Retorna “verdadero” si un lado es diferente del otro lado (Ojo, NO distingue entre números y strings. Por lo tanto: 3 != “3” //falso).
!==	Retorna “verdadero” si un lado es estrictamente diferente del otro lado (Ojo, SÍ distingue entre números y strings. Por lo tanto: 3 != “3” //verdadero).
&&	Funciona como un “y” en la condición. Te permite juntar varias condiciones y devuelve “verdadero” solo si todas se cumplen.
<	Devuelve “verdadero” si el valor a la izquierda es menor que el valor a la derecha.
<=	Devuelve “verdadero” si el valor a la izquierda es menor o igual que el valor a la derecha.
>	Devuelve “verdadero” si el valor a la izquierda es mayor que el valor a la derecha.
>=	Devuelve “verdadero” si el valor a la izquierda es mayor o igual que el valor a la derecha.




variables globales:









*/