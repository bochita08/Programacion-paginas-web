<?php

// while (MIENTRAS)
#Mientras $n (establezco condicion verdadera) 
#me imprime una incrementacion

$n = 5;
while ($n <= 10){
      echo "<br>".$n++;
    
}

$numero = 9;
$pares = 0;
$impares = 0;

#colocamos nuestras variables, cuenta la cantidad.
// Mientras (condicion) me imprime en caso verdadero
# con el simbolo % evalua con el resto si es par o impar


while ($numero > 0){
    if ($numero % 2 == 0){
        echo "<br> el $numero es un numero PAR <br>";
        $pares++;
    } else {
        echo "<br> el $numero es un numero IMPAR <br>";
        $impares++;
    }
        $numero--;
}

//Mostramos los resultado

echo "<br> Cantidad de numeros pares $pares <br>";
echo "<br> Cantidad de numeros impares $impares <br>";

#Inicializacion: $n=4
#Condicion: $n <= 5
#Actualizacion: $n++

for ($n = 4; $n <= 5; $n++){
    echo "<br>" . $n;
}