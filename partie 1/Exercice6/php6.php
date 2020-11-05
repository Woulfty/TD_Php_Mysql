<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Document</title>
            <link rel="stylesheet" href="php6.css">
        </head>
        <body>
            <h1>exercice 6</h1>
            <form method="GET">
            <input type="text"size="10" name="text">
                <input type="submit" value="Envoyer"></p>
            </form>
            <?php
            if (isset($_GET['text'])){
                echo"<span class='red'>".$_GET['text']."</span>";
            }
            highlight_file(__FILE__)
            ?>
        </body>
    </html>