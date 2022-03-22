<!-- OK -->
<?php 
    $display = 'none';
    $optionsbody = '';

    if($popup=="true"){
        include "Controllers/readenquete.php";
        $addvisible="display:none";
        $display="flex";
        include "Components/viewObjects/cards/opt/main.php";
    }
    else{

        if($operation =="postenquete"){
            include "Controllers/postenquete.php";
        }
        if($operation =="postupdate"){
        include "Controllers/updateenquete.php";
        }
    }

?>
