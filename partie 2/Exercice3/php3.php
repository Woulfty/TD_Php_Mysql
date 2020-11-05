<?php
    include "../fonction.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="number" name="arg1">
            <input type="number" name="arg2">
            <input type="number" name="arg3">
            <input type="number" name="arg4">
            <input type="number" name="arg5">
            <input type="number" name="arg6">
            <button type="submit" name="valeur">gg</button>
        </form>
                <?php
                    if (!isset($_Post['valeur'])) {
                       echo moy(
                            array(
                                $_POST["arg1"],
                                $_POST["arg2"],
                                $_POST["arg3"],
                                $_POST["arg4"],
                                $_POST["arg5"],
                                $_POST["arg6"]
                            )
                            );
                    highlight_file(__FILE__);
                    }
                ?>
    </body>
</html>