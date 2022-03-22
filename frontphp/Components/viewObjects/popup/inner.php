<?php
if($operation =="readenquete"){
    $windowtitulo = $tituloextract;
    $addvisible="display:none;";
}
if($operation=="createenquete"){
    $windowtitulo = "Crie sua nova enquete!";
    $tituloextract ="";
}
?>

<div class="innerdiv">
    <div>
        <div class="titlebox">
            <p id='errorprompt'><?=$errorprompt?></p>
            <p class='titulo'>
            <?=$windowtitulo?>
        </p>
        <textarea id="tituloenquete";style="<?=$addvisible?>">
            <?=$tituloextract?>
        </textarea>
        <div class='hdiv'>
        <div class='vdiv1'>
                <ul id='optionList' class='options'>
                    <?php include "Components/viewObjects/cards/opt/main.php";?>
                    <li>
                        <img style='<?=$addvisible?>' src='Public/add.svg' alt='Adicione uma opção!' class='circulo2 grow'>
                    </li>
                </ul>
            </div>
            <?php include "Components/viewObjects/popup/dates.php";?>
            </div>
        </div>
    </div>
</div>