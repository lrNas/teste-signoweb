<!-- OK! -->
<!DOCTYPE html>
<html lang="en">
    <head>

    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Enquetes</title>
<link rel="stylesheet" href="Styles/style.css">
        <?php
        include "Controllers/apiSocket.php";
        include "Controllers/cookiestarter.php";
        include "Src/scripts.php";
    ?>
    </head>
    <body>
        <?php 
            include "Components/viewObjects/header.php";
        ?>


<img id="addenquete"src="Public/add.svg" alt="Adicionar!" style='<?=$addvisible?> 'onclick="openpopup(0,'createenquete')" class="circulo grow">


</body>
</html>