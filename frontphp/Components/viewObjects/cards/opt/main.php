<?php
if($operation =="readenquete"){
    foreach($windowoptions as $option){
    $optvotos = apiSocket("GET","$apiurl/voto/count/$option->id",false);
        include "Components/viewObjects/cards/opt/read.php";
    }
}
if($operation =="updateenquete"){
    foreach($windowoptions as $i=>$option)
    {
        include "Components/viewObjects/cards/opt/update.php";
    }
}
if($operation=="createenquete"){
    for($i=1;$i<=3;$i++){
        include "Components/viewObjects/cards/opt/create.php";
    }
}
?>

