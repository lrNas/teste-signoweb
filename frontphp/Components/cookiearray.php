<?php

function cookiearray($cookie){

    $split = str_replace('["', "", $cookie);
    $split = str_replace('"]', "", $split);
    $slices = explode('","', $split);
    return $slices;
}

function cookieobjarray($cookie){
    
    echo "NO FIM";
    $split = str_replace('[{"', "", $cookie);
    $split = str_replace('"}]', "", $split);
    $arrayitem = explode('"},{"', $split);
        foreach($arrayitem as $key=>$item){
            $properties = explode('","', $item);
  

            
            foreach($properties as $propertie)
            {

                $value = explode('":"', $propertie);
                $att = $value[0];
                $cont = $value[1];
                $todositens[$key][$att]=$cont;
                
            }
            
        }
    return $todositens ;
}


?>