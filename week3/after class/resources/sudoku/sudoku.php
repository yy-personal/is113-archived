<!DOCTYPE html>
<html>
<head>
    <style>
        table,th,td{
            border: 1px solid black; 
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
    $sudoku_box = ...; // complete me
    
    echo "The following sudoku box <br/>";
    printBox($sudoku_box);
                    
    if (isValid($sudoku_box)){
        echo "is <strong>valid</strong>";
    }
    else {
        echo "is <strong>Invalid</strong>";
    }

    function printBox($sudoku_box){
        // oh no i'm empty, complete me!
        // but you may declare other functions as you wish - don't have to use me!
    }

    function isValid($sudoku_box){
        // oh no i'm empty, complete me!
        // but you may declare other functions as you wish - don't have to use me!
    }
?>
</body>
</html>