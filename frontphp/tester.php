<?php

include "./Controllers/cookiestarter.php";
include "./Components/cookiearray.php";
include "./Controllers/getData.php";
include "./Components/dateSorter.php";

$datas = cookieobjarray($valuesoptions);

foreach($datas as $data)
{
    
    $desc = $data["description"];
    $opt =$data["idOption"];

    $input = json_encode(array(
        "idOption"=>$opt,
        "description"=> $desc)
    );
        /** Tratar resposta abaixo */

    $resposta = json_decode(callAPI('PUT', 'http://localhost:3030/option',$input));
}
        $data = json_encode(array(
            "idEnquete"=>$idEnquete,
            "titulo"=> $enquetetitle,
            "dataInicio"=> $enquetestart,
            "dataFim"=> $enqueteend
            
        ));
        /** Tratar resposta abaixo */
        $resposta = json_decode(callAPI('PUT', 'http://localhost:3030/enquete', $data));
        setcookie("operation", "", time() - 3600);

    
?>