<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ex2</title>
        </head>
        <body>
        <form action="" method="post">
        Identifiant<input type="text" name="nom">
        Mot de passe<input type="text" name="MDP">
        <input type="submit" value="submit">
    </form>
    <?php
    try{
        if(isset($_POST['nom'])){
            $MaBase = new PDO('mysql:host=192.168.65.206; dbname=EXO_2_ALEX; charset=utf8','root', 'root');
            $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `medecin` WHERE `nom`='".$_POST['nom']."' AND `MDP` = '".$_POST['MDP']."'");
            if($ObjetResultatDeRequeteBrut->rowCount()>=1){
                 echo "tu es connecté ";
            }else{
                echo "le mot de passe est incorect";
            };
        }
    }catch(Exception $e){
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
    highlight_file(__FILE__);
    ?>
    </body>
</html>
