<?php 
$display = 'none';
$optionsbody = '';
include "./Components/cookiearray.php";


if($popup=="true"){
    $display="flex";
    /**Transformar em uma function */
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
            <button type='submit' id='submit$option->id' onclick='votar($option->id,$idEnquete)' class='grow'>Votar!</button>
        </li>";
        }
    }
    
    if($operation =="updateenquete"){
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
            $optionsbody.="<li class='selection'>
                <input id='option$i' key='$option->id' type='text' class='optionsinput' value='$option->description' required maxlength='30'>
            </li>

           ";
        }
    }

    if($operation =="createenquete"){
        
        $windowtitulo = "";
        /**usar var em cookie pra definir quantas opts vão aparecer */
        for($i=1;3>=$i;$i++){
        $optionsbody .= "<li class='selection'>
                <input id='option$i' key='$i' type='text' class='optionsinput' required maxlength='30'>
            </li>";
        }
            /** Onde foi parar o botão adicionar? */

        // <li class="selection">
        //     <input type="text" class="optionsinput" required maxlength="30">
        //     <img src="close.svg" alt="Excluir" class="circulo2 red grow">
        // </li>

    }
}
else{

    if($operation =="postenquete"){

        $arrayOpt = cookiearray($valuesoptions);
        
        $data = json_encode(array(
            "titulo"=> $enquetetitle,
            "dataInicio"=> $enquetestart,
            "dataFim"=> $enqueteend
            
        ));
        /** Tratar resposta abaixo */
        $resposta = json_decode(callAPI('POST', 'http://localhost:3030/enquete', $data));
        $resposta = $resposta->id;
        foreach($arrayOpt as $opt){
            
            $data = json_encode(array(
                "idEnquete"=> $resposta,
                "description"=> $opt
            ));
            callAPI('POST', 'http://localhost:3030/option', $data);
        }
        setcookie("operation", "",time()-3600);
    }
    

    if($operation =="postupdate"){


        echo"FEITO";
        $datas = cookieobjarray($valuesoptions);
        var_dump($datas);
        
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

    }
    }

include "Components/popupbody.php";
?>
