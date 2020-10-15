<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Document</title>
        </head>
        <body>
            <h1>exercice 4</h1>
            <?php
            $a = 20;
            $b = 50;
            $c = 3;
            $x = $b*$b -4*$a*$c;
            echo "<p>Delta est egal a ".$x."</p>";
            if($x=0){
                echo "<p>il n'y a aucune solution réele.</p>";
            } else if ($x<=0){
                $x1= (-$b - sqrt($x) / 2*$a);
                $x2= (-$b + sqrt($x) / 2*$a);
                echo "<p>Il y a deux solution réel</p><p>S=$x1;$x2</p>";
            } else if ($x=0){
                $x0 = (-$b/2*$a);
                echo "<p>Il y a une solution réel</p><p>S=$x0";
            }
            highlight_file(__FILE__)
            ?>
        </body>
    </html>