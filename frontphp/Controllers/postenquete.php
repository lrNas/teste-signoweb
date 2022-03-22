<?php 
$arrayOpt = cookiearray($valuesoptions);
    $data = json_encode(array(
        "titulo"=> $enquetetitle,
        "dataInicio"=> $enquetestart,
        "dataFim"=> $enqueteend    
    ));
    /** Tratar resposta abaixo */
    $resposta = json_decode(apiSocket('POST', "/enquete", $data));
    $resposta = $resposta->id;
    foreach($arrayOpt as $opt){
        $data = json_encode(array(
            "idEnquete"=> $resposta,
            "description"=> $opt
        ));
        $resposta = apiSocket('POST', "$apiurl/option", $data);
    }
    setcookie("operation", "",time()-3600);
    
?>