<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igual

// var_dump( $a == $b );
// var_dump( $a == $b2 );

// === Idéntico

/* var_dump( $a === $b );
var_dump( $a === $b2 ); */  

// != Diferente
// var_dump( $a != $b );
// var_dump( $a != $b2 );

// !== Diferente
/* var_dump( $a !== $b );
var_dump( $a !== $b2 ); // true

// < Menor que
/* var_dump( $a < $b );
var_dump( $c < $b );
var_dump( $d < $b ); */

// > Mayor que
/* var_dump( $a > $b );
var_dump( $c > $b );
var_dump( $d > $b ); */

// >= Mayor o igual que

/* var_dump( $a >= $b );
var_dump( $c >= $b );
var_dump( $d >= $b ); */

// <= Menor o igual que

/* var_dump( $a <= $b );
var_dump( $c <= $b );
var_dump( $d <= $b ); */

// <=> Nave espacial

// echo 2 <=> 1; // 1 //retorna -1 si el número que esta a la izquierda es menor que el que esta a la derecha. Si ambos numeros son iguales retorna 0. Si el número que esta a la izquierda es mayor que el que esta a la derecha entonces retorna 1
// echo 1 <=> 1; // 0
// echo -50 <=> 1; // -1

// ?? Fusión de null (Está representado por el siguiente símbolo: ??. La primera variable que SÍ esté definida y no sea null, de izquierda a derecha, es la que será utilizada. Veamos un ejemplo para entender mejor este tipo de operador)


$edad_de_pepito = 23;

echo $edad_de_juanito ?? $edad_de_pepito ?? $edad_de_jaimito; // si la edad de juanito no esta definida, usa la proxima y asi sucesivamente.

echo "\n";