<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Document</title>
        </head>
        <body>
            <h1>exercice 2.2</h1>
            <?php
                $array["nom"]= "Donald";
                $array["prenom"]= "trump";
                $array["MDP"]= "1234";
                echo'<table border="1"><tr>';
                {
                    echo "<td>".$array["nom"]." ". $array["prenom"]." ".$array["MDP"]."</td>";
                }
                echo "<tr></table>";
                highlight_file(__FILE__)
            ?>
        </body>
    </html>