<?php
$windowid = $idEnquete;
$windowenquete = apiSocket("GET","$apiurl/enquete/$idEnquete",false);
$tituloextract = $windowenquete[0]->titulo;
$windowtitulo = "<p class='titulo'>$tituloextract</p>";
$windowcreated = $windowenquete[0]->createdAt;
$windowupdated = $windowenquete[0]->updatedAt;
$windowinicial = $windowenquete[0]->dataInicio;
$windowfim = $windowenquete[0]->dataFim;
$windowoptions = apiSocket("GET","$apiurl/option/enq/$idEnquete",false);
$windowvotos = apiSocket("GET","$apiurl/voto/count/enq/$idEnquete",false);
?>