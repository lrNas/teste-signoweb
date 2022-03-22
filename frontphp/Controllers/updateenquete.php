<?php 
$options = cookieobjarray($valuesoptions);

foreach($options as $option)
{
    $desc = $option["description"];
    $opt =$data["idOption"];
    $input = json_encode(array(
        "idOption"=>$opt,
        "description"=> $desc)
    );
    /** Tratar resposta abaixo */
    $resposta = json_decode(apiSocket('PUT', "$apiurl/option",$input));
}
$data = json_encode(array(
    "idEnquete"=>$idEnquete,
    "titulo"=> $enquetetitle,
    "dataInicio"=> $enquetestart,
    "dataFim"=> $enqueteend
    
));
/** Tratar resposta abaixo */
$resposta = json_decode(apiSocket('PUT', "$apiurl/enquete", $data));
setcookie("operation", "", time() - 3600);
?>