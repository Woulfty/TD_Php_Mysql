<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Document</title>
            <link rel="stylesheet" href="php5.css">
        </head>
        <body>
            <h1>exercice 5</h1>
            <form method="POST">
            <input type="text"size="10" name="text">
                <input type="submit" value="Envoyer"></p>
            </form>
            <?php
            if (isset($_POST['text'])){
                echo"<span class='red'>".$_POST['text']."</span>";
            }
            highlight_file(__FILE__)
            ?>
        </body>
    </html>