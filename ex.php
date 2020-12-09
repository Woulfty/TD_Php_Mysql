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