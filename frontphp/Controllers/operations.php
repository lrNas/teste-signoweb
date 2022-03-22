<!-- Vale a pena funcionalizar? -->
<?php
    if($operation=="readenquete"){
        include "Controllers/readenquete.php";
        $popupbartitle ="Enquete ID # $windowid";
        $img= "edit.svg";
        $alt='Editar!';
        $action='update()';
        $display = "flex";
    }
    if($operation=="createenquete"){
        $popupbartitle ="Criar nova enquete.";
        $img= "save.svg";
        $alt = 'Salvar!';
        $action="insert('createenquete')";
        $display = "flex";
    }
    if($operation=="updateenquete"){
        $img= "save.svg";
        $alt = 'Salvar!';
        $action="insert('updateenquete')";
        $display = "flex";
    }
    if($operation=="close"){
        $display = "none";
    }
    if($operation=="postvoto"){
        include "Controllers/postvoto.php";
        $display = "none";
    }
?>