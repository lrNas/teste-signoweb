<?php

include "./Controllers/cookiestarter.php";
include "./Components/cookiearray.php";
include "./Controllers/getData.php";
include "./Components/dateSorter.php";

$data = json_encode(array(
    "idEnquete"=> $idEnquete,
    "idOption"=> $idOption
));
/** Tratar resposta abaixo */
$resposta = json_decode(callAPI('POST', 'http://localhost:3030/voto', $data));
setcookie("operation", "", time() - 3600);
print_r($resposta);

?>