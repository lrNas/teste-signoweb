
<?php 


if($operation=="updateenquete"){
    $dateInner = '<input id="datainicial" type="date" placeholder="<?=$windowstart?>" required>';
    $dateInner2 = '<input id="datafim" type="date" placeholder="<?=$windowstart?>" required>';
}
if($operation=="createenquete"){
    $dateInner = '<input id="datainicial" type="date" required >';
    $dateInner2 = '<input id="datafim" type="date" required >';
}
if($operation=="readenquete"){
    $timestamps=" 
    <li>
        <h3>Criada em:</h3>
        <p><?=$windowcreated?></p>
    </li>
    <li>
        <h3>Ultima atualização:</h3>
        <p><?=$windowupdated?></p>
    </li>";
    $dateInner="<p><?=$windowinicial?></p>";
    $dateInner2="<p><?=$windowfim?></p>";
}
?>
<div>
    <ul class="options infos">
        <?=$timestamps?>
        <li>
            <h3>Data Inicial:</h3>
            <?=$dateInner?>
        </li>
        <li>
            <h3>Data Final:</h3>
            <?=$dateInner2?>
        </li>
    </ul>
</div>


