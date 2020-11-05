<?php
    include "../fonction.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>phpfinal</title>
    </head>
    <body>
        <p>Identifiant Julien</p>
        <p>Mot de passe : 1234</p>
        <?php
            if (sessionLog() === "ok") {
                echo "Bon mot de passe";
            }else{
                echo "Mauvais mot de passe";
            } 
        ?>
    </body>
</html>



