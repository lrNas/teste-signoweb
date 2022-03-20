<?php 
$display = 'none';
$optionsbody = '';
    if($popup=="true"){
        $display="flex";
        if($operation =="readenquete"){
            $windowid = $idEnquete;
            $windowenquete = getData("http://localhost:3030/enquete/$idEnquete");
            $tituloextract = $windowenquete[0]->titulo;
            $windowtitulo = "<p class='titulo'>$tituloextract</p>";
            $windowcreated = $windowenquete[0]->createdAt;
            $windowupdated = $windowenquete[0]->updatedAt;
            $windowinicial = $windowenquete[0]->dataInicio;
            $windowfim = $windowenquete[0]->dataFim;
            $windowoptions = getData("http://localhost:3030/option/enq/$idEnquete");
            $windowvotos = getData("http://localhost:3030/voto/count/enq/$idEnquete");  
        
        foreach($windowoptions as $option){
            $optvotos = getData("http://localhost:3030/voto/count/$option->id");
            $optionsbody.="
            <li class='selection'>
            <h3>$option->description</h3>
            <p class='votos'>$optvotos votos</p>
            <button type='submit' class='grow'>Votar!</button>
        </li>";
        }
    }

    if($operation =="createenquete"){
        
        $windowtitulo = "";
        for($i=1;3>=$i;$i++){
           $optionsbody .= "<li class='selection'>
                <input id='option$i' key='$i' type='text' class='optionsinput' required maxlength='30'>
            </li>";
        }

// <li class="selection">
//     <input type="text" class="optionsinput" required maxlength="30">
//     <img src="close.svg" alt="Excluir" class="circulo2 red grow">
// </li>

        }
}
    include "Components/popupbody.php"
?>
