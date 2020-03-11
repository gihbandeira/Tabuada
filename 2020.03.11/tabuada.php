<?php

if(!isset($_REQUEST["tabuada"] ) ){
    echo" Valor inválido ";
    exit;
}

    $tabuada = $_REQUEST ["tabuada"];

    if($tabuada <=0 || $tabuada > 50){
        echo "Valor invalido para tabuada";
        exit;
    }

    $arrayJson = array();
    $arrayJson["tabuada"] = $tabuada;

    for($contador = 0; $contador <=10; $contador++){
        $arrayJson[$tabuada . "X" . $contador] = $tabuada * $contador;
    }

    echo json_encode($arrayJson);

?>