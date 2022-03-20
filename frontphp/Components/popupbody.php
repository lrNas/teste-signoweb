<?php echo "
<div id='blocker' class='blocker' style='display:$display'></div>
<form id='poupupform'>
<div id='popup'class='popup' style='display:$display'>";

if($operation=="readenquete"){
    include 'popupbarget.php';
    $countervotos = "<p class='votos'>Votos: $windowvotos</p>";
}
if($operation=="createenquete"){
    include 'popupbarcreate.php';
    $countervotos = "<p class='titulo'>
    Digite o texto da enquete abaixo:
</p>
<textarea id='tituloenquete'>

</textarea>";
    
}

echo"
    <div class='innerdiv'>
    <p id='errorprompt'>$errorprompt</p>
        <div>
            <div class='titlebox'>
                
                $windowtitulo
                $countervotos
            </div>  
            <div class='hdiv'>
                <div class='vdiv1'>
                    <ul id='optionList' class='options'>
                        $optionsbody
                    <li>
                        <img style='$addvisible' src='./Public/add.svg' alt='Adicione uma opção!' class='circulo2 grow'>
                        
                    </li>
                </ul>
            </div>
            </form>
    <div>";

    if($operation=="readenquete"){
        include 'popupoptionviewer.php';
    }
    if($operation=="createenquete"){
        include 'popupoptioneditor.php';
        
    }
echo"</div></div></div></div>";
?>