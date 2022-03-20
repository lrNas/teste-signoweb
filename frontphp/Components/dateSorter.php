<?php
function dateSorter($inicio,$fim){

    $status = "atual";    

    $agora = new DateTime(date('y-m-d h:i:s'));

    $dataInicio = new DateTime($inicio);
    $dataFim = new DateTime($fim);
    
    if($dataInicio>$agora){
        $status = "futuro";
    }
    if($dataFim<$agora){
        $status = "encerrado";
    }
    return $status;
}
?>