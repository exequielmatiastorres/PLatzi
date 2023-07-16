<?php

$edades = [18, 22, 40, 34];

// count //sirve para contar cuantos elementos tenemos dentro de una arreglo. Cuenta desde el 1 no desde el 0
// echo count($edades);

// array_push //me permite añadir un número o lo que yo quiera al final de un arreglo   
// array_push($edades, 13);

// is_array //función que nos sirve para definir o para analizar si una variable o lo que quisieramos consultar es realmente un arreglo
$esto_no_es_un_arreglo = "";
// var_dump( is_array( $edades ) );

// explode //sirve para convertir un string en un arreglo
// $lista_de_frutas = "fresa,cereza,manzana";
// $lista_de_frutas_array = explode(",", $lista_de_frutas); //lo primero que solicita explode es el caracter median el cual vas a separar los elementos, en este ejemplo usamos la , luego nos pide cual va a ser el string que tiene que separar

// implode //opuesto a explode, lo que indijes deja de ser un array
$lista_de_frutas_array = ["fresa", "cereza", "manzana"];
$lista_de_frutas = implode(",", $lista_de_frutas_array);//

var_dump($lista_de_frutas);

echo "\n";