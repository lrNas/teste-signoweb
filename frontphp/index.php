<!DOCTYPE html>
<html lang="en">
    <head>

        <?php include "Components/head.php";
                include "Controllers/getData.php";
                include "Controllers/cookiestarter.php";
                if($popup == "true"){
                    $addvisible="display:none";
                }
                include "Src/scripts.php";
                include "Components/dateSorter.php";
                ?>
    </head>
    <body>
    <div class="container header">
            <?php include "Components/header.php"?>
            <hr>
            <?php include "Controllers/popup.php"?>
    </div>
    <div class="container2">
        <main>
                <?php 
                    $enquetes = getData("http://localhost:3030/enquete");

                    $conter =1;
                    foreach ($enquetes as $enquete){
                        $votos = getData("http://localhost:3030/voto/enq/$enquete->id");
                        if($votos==NULL)
                        {
                            $votos = 0;
                        }else{
                            $votos=sizeof($votos);
                        };
                        
                        $status = dateSorter($enquete->dataInicio,$enquete->dataFim);
                        if($status==$filtro||$filtro=="todos"||$filtro==null){

                            include "./Components/enqpreview.php";
                        }
                            $conter++;
                    };
                ?> 
         </main>
    </div>
    
</div><img id="addenquete"src="./Public/add.svg" alt="Adicionar!" style='<?=$addvisible?> 'onclick="openpopup(0,'createenquete')" class="circulo grow">


</body>
</html>