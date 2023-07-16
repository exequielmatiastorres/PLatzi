<?php

$michis_felinos =  true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_PHP = false;

// And

# var_dump($michis_felinos && $michis_4_patas);


// Or
# var_dump($michis_4_patas || $michis_vuelan);

// Not
# var_dump( !$michis_4_patas );


// Experimentos que te va a hacer decir waaaaaaaaaaaaat

$resultado = $michis_4_patas and $michis_programan_con_PHP;

var_dump( $resultado );

echo "\n";

/*

operadores logicos
En programación, los tipos de operadores más usados son: AND (Y lógico), OR (O lógico) y NOT (Negación lógica).

Y (And)
Se utiliza para verificar si dos afirmaciones son ciertas. Si ambas afirmaciones son ciertas, entonces la oración completa es cierta. Si una de ellas es falsa, entonces la oración completa es falsa.

Operador Y (And) en PHP
En PHP para representar este operador podemos usar la palabra reservada and o && (doble ampersand):

// Las siguientes líneas son para visualización mas no para que las ejecutes en tu PC
# Opción 1:
$valor_1 and $valor_2
# Opción 2:
$valor_1 && $valor_2


O (Or)
Se usa para verificar si al menos una afirmación es cierta. Si al menos una de ellas es cierta, entonces la oración es cierta, de lo contrario, es falsa.

Operador O (Or) en PHP
En PHP se puede representar usando or o también ||:

// Las siguientes líneas son para visualización mas no para que las ejecutes en tu PC
# Opción 1:
$valor_1 or $valor_2
# Opción 2:
$valor_1 || $valor_2


No (Not)
Se emplea para invertir el valor de una afirmación. Por ejemplo, si una afirmación es verdadera, al negarlo el resultado será Falso, lo mismo pasa a la inversa.

Operador No (Not) en PHP
Usamos el signo de exclamación ! antes de la variable que queremos negar:

// La siguiente línea es para visualización mas no para que las ejecutes en tu PC
!$valor


*/