<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL_TD4_Exo3</title>
</head>
<body>
<?php
        include "../menu.php";
?>
    <form action="" method="post">
                    Enter votre pseudo :<input type="text" placeholder="Entrer votre nom d'utilisateur" name="nom">
                    Crée votre mot de passe :<input type="password" placeholder="Entrer votre mot de passe" name="MDP">
                    Confirmer votre mot de passe :<input type="password" placeholder="Confirmer le mot de passe" name="password" id="confirmpassword" value="" />
                    <input type="submit" name='submit' value="S'inscrire">
                </form>
    <?php
    try{
        if (isset($_POST["submit"])) {
            $MaBase = new PDO('mysql:host=192.168.65.206; dbname=utilisateurs; charset=utf8','root', 'root');
            // INSERT INTO User(nom, MDP) VALUES("...", "...")

            $exist = $MaBase->query("SELECT COUNT(*) FROM User WHERE nom ='".$_POST['nom']."'");
            $exist = $exist->fetch();

            if ($exist["COUNT(*)"] > 0) {
                echo "Cet utilisateur existe deja";
                return;
            } else {
                $insert = $MaBase->query("INSERT INTO User(nom, MDP) VALUES('".$_POST['nom']."','".$_POST['MDP']."')");
                if($insert->rowCount()>=1)
                    header("Location: index.php");
                else
                    echo "Une erreure est survenue";
            }
            

        }
    }catch(Exception $e){
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
    highlight_file(__FILE__);
    ?>
</body>
</html>