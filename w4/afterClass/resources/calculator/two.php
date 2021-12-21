<?php

function calculate2($n1, $n2, $opr) {
    // PART A
    // YOUR CODE GOES HERE
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

$errors = [];

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

$result = calculate2($num1, $num2, $operator);

?>
<html>
<body>
<ul>  
<?php
    // PART B
    // YOUR CODE GOES HERE
    // Use $errors[] Array to list form input validation errors (IF ANY)
    // $errors=[
    //     $mn1 => 'num1 is missing',
    //     $mn2 => 'num2 is missing',
    //     $nn1 => 'num1 is non-numeric',
    //     $nn2 => 'num2 is non-numeric',
    // ];
    if(($num1)==''){
        echo '<li>num1 is missing</li>';
    }
    if(($num2=='')){
        echo '<li>num2 is missing</li>';
    }

    if($num1 != '' and !is_numeric($num1)){
        echo '<li>num1 is non-numeric</li>';
    }
    if($num2 != '' and !is_numeric($num2)){
        echo '<li>num2 is non-numeric</li>';
    }


?>
    
</ul>

<h1><?= $result; ?></h1>

</body>
</html>