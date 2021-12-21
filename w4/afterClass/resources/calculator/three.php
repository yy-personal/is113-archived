<?php

function calculate2($n1, $n2, $opr) {
    // YOUR CODE GOES HERE
    // COPY YOUR CODE FROM Part A (two.php)
    $result = '';
    if(is_numeric($n1) and is_numeric($n2)){
        if($opr == "+"){
            $result = $n1 + $n2;
        }
        elseif($opr == "-"){
            $result = $n1 - $n2;
        }
        elseif($opr == "*"){
            $result = $n1 * $n2;
        }
        elseif($opr == "/"){
            if($n1==0 or $n2==0){
                $result = 'Undefine';
            }
            else{
                $result = $n1 / $n2;
            }
        }
        
        return $result;
    }
}

function calculate3($n1, $n2, $n3, $opr1, $opr2) {
    // PART C
    // YOUR CODE GOES HERE
    $result = '';
    if(is_numeric($n3)){
        if($opr2 == "+"){
            $result = calculate2($n1, $n2, $opr1) + $n3;
        }

        elseif($opr2 == "-"){
            $result = calculate2($n1, $n2, $opr1) - $n3;
        }

        elseif($opr2 == "*"){
            if ($opr1 == '+' or $opr1 == '-'){
                $result = calculate2($n1, $n2*$n3, $opr1) ;
            }
            else{
                $result = calculate2($n1, $n2 , $opr1) * $n3;
            }
        }

        elseif($opr2 == "/"){
            if($n1==0 or $n2==0 or $n3==0){
                $result = 'Undefine';
            }
            else{
                if ($opr1 == '+' or $opr1 == '-'){
                    $result = calculate2($n1, $n2 / $n3, $opr1);
                }
                else{
                    $result = calculate2($n1, $n2 , $opr1) / $n3;
                }

            }
        }
    return $result;
}
}

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$operator1 = $_POST['operator1'];
$operator2 = $_POST['operator2'];

$result = calculate3($num1, $num2, $num3, $operator1, $operator2);

?>
<html>
<body>
<h1>Result: <?= $result; ?></h1>
</body>
</html>