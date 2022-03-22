<?php 
    $data = json_encode(array(
        "idOption"=> $idOption,
        "idEnquete"=> $idEnquete   
    ));
    /** Tratar resposta abaixo */
    $resposta = json_decode(apiSocket('POST', "$apiurl/voto", $data));
    $resposta = $resposta->id;
    setcookie("operation", "", time() - 3600);
?>
