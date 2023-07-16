<?php


//palabra que nos ayuda a recibir los datos de un formulario: $_REQUEST (LOS RETORNA EN FORMATO DE ARRAY)


// $edad = 7;

// if($edad < 5){
//     echo "sus juguetes tienen espacio en la parte inferior de la bodega";
// }else if($edad > 5 && $edad <= 6){
//     echo "sus juguetes tienen espacio en la parte media de la bodega";
// }else if($edad >= 7){
//     echo "Sus juguetes tienen espacio en la parte alta de la bodega";
// }else{
//     echo "Su espacio de almacenamiento se encuentra en la bodega de al lado";
// }


function arbolito($pisos){
    for($i=0; $i < $pisos; $i++){
        echo str_repeat("*", $i) . "\n";
    }
}


arbolito(10);








/*
¿que es el pensamiento logico?
capacidad que se desarrolla con practica para tomar toda la información alrededor de un problema o proyecto y relacionarla y conectarla para desarrollar un algoritmo.
Debe ser la forma mas optima de llegar a ese resultado
*Diagramas de Flujo
*Escribir el paso a paso de varias formas
*Resolver ejercicios matemáticos























































*/