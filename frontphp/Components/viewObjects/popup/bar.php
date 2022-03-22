<!-- OK -->
    
<div id='blocker' class='blocker' style='display:<?=$display?>'>
</div>
<div id='popup'class='popup' style='display:<?=$display?>'>
        <ul class='hul popco'>
        <li>
            <h1 class='idenquete'><?=$popupbartitle?></h1>
        </li>
        <li>
        <img src='Public/<?=$img?>' alt='<?=$alt?>' onclick="<?=$action?>" class='circulo2 grow'>
        </li>
        <li>
            <img src='Public/close.svg' alt='Cancelar!' onclick='closepopup()'class='circulo2 red grow'>
        </li>
    </ul>
    <?php include "Components/viewObjects/popup/inner.php";?>
</div>


