<?php
    include "fonction.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../menu.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>phpfinal</title>
    </head>
    <body>
    <?php
        include "../menu.php";
    ?>
        <p>Identifiant : Julien</p>
        <p>Mot de passe : 1234</p>
        <?php
            if (sessionLog() === "ok") {
                echo "Bon mot de passe";
                header();
            }else{
                echo "Mauvais mot de passe";
            } 
        ?>
        <?php
        highlight_file(__FILE__)
        ?>
    </body>
</html>



