<!--exercice 1-->
<?php
    function tableau(){
        ?>
            <table border 1>
                <tr>
                    <td>hey</td>
                    <td>yolo</td>
                </tr>
                <tr>
                    <td>miaw</td>
                    <td>cuit</td>
                </tr>
            </table>
        <?php
    }
//exercice 2
    function tableau1($arg_1, $arg_2,$arg_3){
            echo"
            <table border 1>
                <tr>
                    <td>$arg_1</td>
                </tr>
                <tr>
                    <td>$arg_2</td>
                </tr>
                <tr>
                    <td>$arg_3</td>
                </tr>
            </table>";
    }
//exercice 3
    function moy($arg){
        return ($arg[0] + $arg[1] + $arg[2] + $arg[3] + $arg[4] + $arg[5]) / 6;
    }
//exercice final
    function sessionLog($arg_1,$arg_2){
        if (!isset($_SESSION["Logged"]) && !$_SESSION["Logged"]) {
            ?>
                <form method="POST">
                <label for="nom">utilisateur :</label>
                    <input type="nom" name="nom" id="nom" value="" />    
                    <p>
                        <label for="password">Mot de passe:</label>
                        <input type="password" name="password" id="password" value="" />
                        <input type="submit" name="submit" value="connection" />
                    </p>
            </form>
            <?php
                if(isset($_POST["submit"])) {
                    if($_POST['nom'] === "Julien" && $_POST['password'] === "1234") {
                           return "ok";
                        }else{
                            return "no fdp !";
                        }
                    }
        }
    }
?>