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

    function moy($arg){

        return ($arg[0] + $arg[1] + $arg[2] + $arg[3] + $arg[4] + $arg[5]) / 6;

        
    }

?>