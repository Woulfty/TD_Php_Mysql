<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Document</title>
        </head>
        <body>
            <h1>exercice 3.A</h1>
            <?php
                $array = [
                    [
                        "nom" => "Donald",
                        "prenom" => "trump",
                        "MDP" => "1234",
                    ],
                    [
                        "nom" => "Valdimir",
                        "prenom" => "Poutine",
                        "MDP" => "4321",
                    ], 
                    [
                        "nom" => "Manu",
                        "prenom" => "Macron",
                        "MDP" => "1324",
                    ],
                ];
                echo'<table border="1"';
                for ($i=0;$i < 3 ;$i++)
                {
                    echo "<tr><td>".$array[$i]["nom"]." ".$array[$i]["prenom"]." ".$array[$i]["MDP"]."</td></tr>";
                }
                echo "</table>";
                highlight_file(__FILE__)
            ?>
        </body>
    </html>