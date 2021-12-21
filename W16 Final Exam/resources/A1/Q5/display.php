<?php
require_once 'Sudoku.php';
require_once 'SudokuDAO.php';

session_start();

if (!isset($_SESSION['current-game'])) {
    $dao = new SudokuDAO();
    $sudoku = $dao->get();
    $_SESSION['current-game'] = $sudoku;
}

$sudoku = $_SESSION['current-game'];

/*
  Task: 
  Gets the row, col and cell value from the $_POST object(if they are sent
  over). It will update the board if the board cell is empty 
  (i.e. whitespace).
*/

// YOUR CODE GOES HERE







/*
  This will print the 9 x 9 suduko as an HTML table
 */
function generate_board($sudoku) {
    // YOUR CODE GOES HERE
}



?>
<html>
<head>
    <style>
    	td {
            border: 1px black solid;
            width: 30px;
            height: 30px;
            text-align: center;
    	}
    	body {
            font-family: courier;
    	}
    </style>
</head>
<body>

<?php 
    generate_board($sudoku); 
    echo "<h1>$message</h1>";
?>

<form method='post'>
    Row: <select name='row'>
        <option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>
        <option value='8'>8</option>
    </select>
    Col: <select name='col'>
        <option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>
        <option value='8'>8</option>
    </select>
    Value: <select name='value'>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>
        <option value='8'>8</option>
        <option value='9'>9</option>
    </select>
    <input type='submit' name='action' value='Add Move' />
</form>
</body>
</html>
