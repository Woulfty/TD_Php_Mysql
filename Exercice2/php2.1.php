<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>php</title>
            <link rel="stylesheet" href="php2.css">
        </head>
        <body>
            <h1>exercice 2.A</h1>
            <?php
            
                $array = array( 12, 15, 02, 14, 4);
            
                for($i=0;$i<5;$i++)
               {

                    echo $array[$i];
                }
            ?>
            <h1>exercice 2.B</h1>
            <?php
            $montableau = array(1,2,3,4,5);
            echo'<table border="1"><tr>';
            for ($i=0;$i <5 ;$i++)
            {
                  echo "<td>".$montableau[$i]."</td>";    
            }
            echo "<tr></table>";
            //if
            highlight_file(__FILE__)
            ?>
        </body>
    </html>