<?php

$cafes = array(
    "Capuccino" => 50, // => asigna el valor a un valor de un arreglo asociativo
    "Latte" => 49,
    "Americano" => 70
);

// echo "El precio del cafe Americano es de {$cafes['Americano']}"; //encerrar el arreglo en {} si queremos que funcione dentro del strings para evitar concatenar.


$personas = array(

    "Carlos" => array(
        "edad" => 20, // , se le diie trailing en listas
        "apellido" => "Santana"
    ),

    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    ),

);

echo "La informacion de Mr. Michi es: Edad: " . $personas["Mr.Michi"]["edad"] . " Apellido: " . $personas["Mr.Michi"]["apellido"];

echo "\n";

/*
¿Arreglos Asociativos?
Una variable que puede guardar multiples valores y puedes acceder a ellos mediante una palabra.

*/