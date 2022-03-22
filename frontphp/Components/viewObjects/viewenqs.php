<div class="container2">
    <main>
        <?php 
            include "Components/handlers/dateSorter.php";
            $enquetes = apiSocket("GET","$apiurl/enquete",false);
            $conter =1;

            foreach ($enquetes as $enquete){
                //**PROCURAR UMA FUNÇÃO COUNT! */
                $votos = apiSocket("GET","$apiurl/voto/enq/$enquete->id",false);
                if($votos==NULL)
                {
                    $votos = 0;
                }else{
                    $votos=sizeof($votos);
                };
                $status = dateSorter($enquete->dataInicio,$enquete->dataFim);
                if($status==$filtro||$filtro=="todos"||$filtro==null){
                    include "Components/viewObjects/cards/enq.php";
                }
                $conter++;
            };
        ?> 
    </main>
</div>



           