<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>php</title>
            <link rel="stylesheet" href="php.css">
        </head>
        <body>
            <?php
                echo"refresh la page";
                $NombreAleatoire = rand(0,100);
                if( $NombreAleatoire%2 == 1){
                    echo' <div class="bleu"> Le chiffre est impaire</div>'.$NombreAleatoire;
                    //impaire
                }else{
                    echo' <div class="rouge"> le chiffre est paire</div>'.$NombreAleatoire;
                    //paire
                }
                highlight_file(__FILE__)
            ?>
            
        </body>
    </html>

