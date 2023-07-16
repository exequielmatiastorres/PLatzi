<?php

/* $contador = 1;
$resultado = $contador++;

echo $resultado; */

// Tiene asociatividad izquierda
// echo 1 - 2 - 3 - 4;

// Tiene asociatividad derecha

// $b = 5;
/* $c = 10;

$a = $b = $c;

echo $a; */

$michis_4_patas = true;
$michis_programan_con_PHP = false;

$resultado = ($michis_4_patas and $michis_programan_con_PHP);

var_dump( $resultado );

echo "\n";

/*
En pocas palabras, la precedencia de operadores es cuando el lenguaje nos dice qué operación pasará primero y qué operación pasará después de acuerdo al operador.

La asociatividad
Cuando los operadores tienen la misma precedencia, su asociatividad elige si se resuelve la instrucción a partir de la derecha o desde la izquierda.

<?php

// Tiene asociatividad de izquierda:
echo 1 - 2 - 3;

*/