<?php

function cookiearray($cookie){

    $split = str_replace('["', " ", $cookie);
    $split = str_replace('"]', " ", $split);
    $slices = explode('","', $split);
    return $slices;
}


?>