<?php
// IF ELSEIF ELSE

#variablas
#condicion(){ afirmacion es verdadero}
#segunda condicion caso si son iguales
#Caso contrario es decir falso es menor

$a=20;
$b=20;

if ($a>$b){

    echo $a. " es mayor que " . $b . "<br>";
}elseif ($a == $b) {
    echo $a. " es igual que " . $b . "<br>";
}else {
    echo $a. " es menor que " . $b . "<br>";
}

 echo " Continua el programa ";

//SWITCH
#Valua el valor que contiene $i
# quiero que me avises cuando el valor es 0
# quiero que me avises si es 1
# quiero que me avises si es igual a 2 o mayor

$i=1;
switch ($i){
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
        default:
        echo "i es igual mayor que dos " ;
    
}