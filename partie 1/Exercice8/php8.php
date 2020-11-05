<?php
        session_start();
        unset($_SESSION['count']);
        ?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exercice7</title>
    </head>
    <body>
    <form method="GET">
            <input type="text"size="10" name="count">
                <input type="submit" value="Envoyer"></p>
            </form>
            <input type="button" name="">
            <?php
        session_start();
        if (!isset($_SESSION['count'])) {
            $_SESSION['count'] = 0;
        } else {
            $_SESSION['count']++;
        }
        highlight_file(__FILE__)
        ?>
    </body>
</html>