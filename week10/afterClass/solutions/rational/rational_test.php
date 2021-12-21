<?php
    # Enter code here
    require_once "Rational.php";
    if(!isset($_GET["n_1"])){
        echo "  <form>
                    <h4>Rational 1</h4>

                    Numerator: 
                    <input type='text' name='n_1'/>
                    <br/>
                    
                    Denominator: 
                    <input type='text' name='d_1'/>
                    <br/>

                    <h4>Rational 2</h4>
                    
                    Numerator: 
                    <input type='text' name='n_2'/>
                    <br/>
                    
                    Denominator: 
                    <input type='text' name='d_2'/>
                    <br/><br/>  

                    Operation:
                    <select name='op'>
                        <option>+</option>
                        <option>-</option>
                        <option>/</option>
                        <option>*</option>
                    </select>
                    <br/><br/>
                    
                    <input type='submit'/>
                </form>";
    }
    else{
        $n1 = $_GET["n_1"];
        $d1 = $_GET["d_1"];
        $n2 = $_GET["n_2"];
        $d2 = $_GET["d_2"];
        $op = $_GET["op"];

        $r1 = new Rational($n1,$d1);
        $r2 = new Rational($n2,$d2);
        echo "First Number: {$r1->toString()} <br/>";
        echo "Second Number: {$r2->toString()} <br/>";
        if($op == "*") {
            $result = $r1->multiply($r2);
        }
        elseif($op == "/"){
            $result = $r1->divide($r2);
        }
        elseif($op == "+"){
            $result = $r1->add($r2);
        }
        else{
            $result = $r1->substract($r2);
        }
        echo "Result: {$result->toString()} <br/>";
    }
?>