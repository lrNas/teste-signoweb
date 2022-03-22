<!-- OK -->
<li class='selection'>
    <h3><?=$option->description?></h3>
    <p class='votos'><?=$optvotos?> votos</p>
    <button type='submit' id='submit<?=$option->id?>' onclick='votar(<?=$option->id?>)' class='grow'>Votar!</button>
</li>