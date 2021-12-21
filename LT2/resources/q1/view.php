<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<!DOCTYPE html>
<?php
    require_once 'common.php';
    $dao = new StallDAO();
    $stalls = $dao->getStalls();
    var_dump($stalls );
?>
<html>
    <body>
        <?php
            ### Add code here or elsewhere in this file
            
            echo "
            <table border = '1'>
            <tr>
                <th>Stal Name</th><th>Count of Sales</th>
            </tr>";

            foreach($stalls as $stall){
                // $name = $stall->getName();
                // echo $stall;
                // $stall->getName();
                $salesNum = count($stall->getSales());
                echo "
                <tr>

                    <td> {$stall->getName()} </td>
                    <td> {$salesNum} </td>

                </tr>
                ";
            }
            echo "
            </table>
            ";
            
        ?>
    </body>
</html>