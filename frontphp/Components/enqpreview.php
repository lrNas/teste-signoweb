<?php 
echo "                  
<div id='enquete$enquete->id' class='enq-prev $status grow' style='order: $conter' onclick='openpopup($enquete->id,`readenquete`)'>
    <h1 class='prev-titulo'>$enquete->titulo</h1>
    <p class='prev-votos'>Votos: $votos </p>
</div>
";
?>