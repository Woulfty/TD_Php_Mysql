<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL_TD4_Exo1</title>
</head>
<body>
<?php
        include "../menu.php";
?>
<?php 
//PDO attend 3 param : IP , Login, PASS
try{
    $MaBase = new PDO('mysql:host=192.168.65.206; dbname=EXO_2_ALEX; charset=utf8','root', 'root');

    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `patient`");

    while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch()){
        echo $TableauDunTuple["numSS"]." ".$TableauDunTuple["nom"]." ".$TableauDunTuple["prénom"]."<br>";
    };
}catch(Exception $e){
    echo "Une erreur c'est produite :".$e->getMessage();
}
highlight_file(__FILE__);
?>
</body>
</html>