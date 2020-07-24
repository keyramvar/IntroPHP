
<?php
//variables en php
//podemos almacenar información

$numero = 10;

echo 'esto es un numero: '.$numero; //el puno para concatenar
echo '<br></br>';

$texto = "Esto es una cadena de texto";

echo 'mi cadena: '.$texto;
echo '<br></br>';

//variables booleanas

$boolean = true;

echo 'Esto es una variable booleana '.$boolean;
echo '<br></br>';

$arreglo = array("Alejandro", "Maria");

echo $arreglo[0];
echo '<br></br>';

$colores = array("color1"=>"rojo", "color2" =>"azul");

echo $colores["color1"];
echo '<br></br>';

$objeto = (object) ["mueble1"=>"armario", "mueble2"=>"escritorio"];

echo $objeto->mueble2;

?>
    