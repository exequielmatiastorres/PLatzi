<?php


i = 0;
do {
    echo i++;
    while ($i <= 10);
}

$arr = array(1,2,3,4);
foreach($arr as $value) { //
    echo $value;
}



$arr = array(1,2,3,4);
for($i=0; $i<4; $i++) { //
    echo $arr[$i];
}

foreach ($arr as $value){ //asigna el valor a cada array
    echo $value;
}

switch($valorA){
    case 1: //en el caso que el valor de A sea 1 se ejecuta lo siguiente
        echo "El valor es 1";
    break;
    case 2:
        echo "El valor es 2";
    break;
    case 3:
        echo "El valor es 3";
    break;
    default: //default en caso de que las condiciones no se cumplan
        echo "No es ninguno de los valores mencionados"
}


/*
Estructuras de control
*if: estrucura de contorl que validad si sucede alguna condición
*else: en caso que el if no se cumpla se ejecuta el
*while: estructura de ciclo, se encargan de ejecutar 1 acción mientras una condición sucede
*do-while :estructura de ciclo, se encargan de ejecutar 1 acción mientras una condición sucede
*for: explicado en codigo   
*foreach: explicado en codigo
*switch: se puede tener diferentes casos de evaluación para una variable.

*/


























?>