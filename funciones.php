<?php


function bienvenida(){
    echo "Bienvenido al curso de php";
}

bienvenida();


function saludar($hola){
    echo $hola;
}

saludar("Hola a todos");

function retorno($retornar){
    return $retornar;
    
}


echo retorno("Retornando la funcion");

?>