<?php
class Sudoku {
    /*
      $board is a 9 x 9 array. An example is as follows:
      [
        ['6', '5', ' ', ' ', ' ', ' ', ' ', ' ', '9'] ,
        ['2', ' ', ' ', '3', ' ', '9', ' ', '6', '5'] ,
        [' ', '9', ' ', '7', ' ', '6', '2', ' ', ' '] ,
        ['7', ' ', ' ', '6', ' ', ' ', ' ', ' ', ' '] ,
        ['3', '8', ' ', '1', ' ', '7', ' ', '9', '4'] ,
        [' ', ' ', ' ', ' ', ' ', '4', ' ', ' ', '7'] ,
        [' ', ' ', '9', '4', ' ', '5', ' ', '8', ' '] ,
        ['8', '7', ' ', '9', ' ', '3', ' ', ' ', '6'] ,
        ['5', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '] 
      ]


      Another example (Insert row0, col2 --> value 8) --> SUCCESS
      [
        ['2', '4', ' ', '3', '9', '5', '7', '1', '6'] ,
        ['5', '7', '1', '6', '2', '8', '3', '4', '9'] ,
        ['9', '3', '6', '7', '4', '1', '5', '8', '2'] ,
        ['6', '8', '2', '5', '3', '9', '1', '7', '4'] ,
        ['3', '5', '9', '1', '7', '4', '6', '2', '8'] ,
        ['7', '1', '4', '8', '6', '2', '9', '5', '3'] ,
        ['8', '6', '3', '4', '1', '7', '2', '9', '5'] ,
        ['1', '9', '5', '2', '8', '6', '4', '3', '7'] ,
        ['4', '2', '7', '9', '5', '3', '8', '6', '1'] 
      ]
     Note: An empty cell is represented as ' ' (i.e. whitespace)
    */
    private $board;

    public function __construct() {
        $this->board = [
            ['2', '4', ' ', '3', '9', '5', '7', '1', '6'] ,
            ['5', '7', '1', '6', '2', '8', '3', '4', '9'] ,
            ['9', '3', '6', '7', '4', '1', '5', '8', '2'] ,
            ['6', '8', '2', '5', '3', '9', '1', '7', '4'] ,
            ['3', '5', '9', '1', '7', '4', '6', '2', '8'] ,
            ['7', '1', '4', '8', '6', '2', '9', '5', '3'] ,
            ['8', '6', '3', '4', '1', '7', '2', '9', '5'] ,
            ['1', '9', '5', '2', '8', '6', '4', '3', '7'] ,
            ['4', '2', '7', '9', '5', '3', '8', '6', '1'] 
        ];
    }

    public function getBoard() {
        return $this->board;
    }

    public function getCellValue($row, $col) {
        return $this->board[$row][$col];
    }

    public function setCellValue($row, $col, $value) {
        $this->board[$row][$col] = $value;
    }

    public function getBoardRow($row) {
        return $this->board[$row];
    }

    public function isValidSimple($array){
        foreach( $array as $elem ) {
            if (!is_numeric($elem)) {
                return false;
            }
        }
        for( $i = 1; $i <= 9; $i++ ) {
            if( !in_array($i,$array) )
                return false;
        }
        return true;
    }
    

   /*
    * Checks if the sudoku board is valid based on the following conditions:
    * 1. every row contains the numbers (1 .. 9) once
    * 2. every column contains the numbers (1 .. 9) once
    * 3. every square contains the numbers (1 .. 9) once
    * <p/>
    * Use the following methods to complete it:
    * 1. isAllRowsValid
    * 2. isAllColumnsValid
    * 3. isBoxValid
    *
    * Returns true if the 3 conditions are fulfilled. 
    * Otherwise, return false.
    */
    public function isValid() {

        // YOUR CODE GOES HERE


        

    }

   /*
    * Checks if every column contains the number (1 .. 9) once
    *
    * Returns true if every column contains 1 .. 9 once. false otherwise.
    */
    public function isAllColumnsValid() {
        // YOUR CODE GOES HERE





        
    }

    /**
    * Checks if every row contains the number (1 .. 9) once
    *
    * Return true if every row contains 1 .. 9 once. false otherwise.
    */
    public function isAllRowsValid() {
        // YOUR CODE GOES HERE





    }

    
   
   /*
    * Checks if the square contains the number (1 .. 9) once
    * Parameters:
    * 
    * $x (type: int) : the row number of the top-left cell of the 3 x 3 box
    * $y (type: int) : the column number of the top-left cell of the 
    *                  3 x 3 box
    * Return true if the square contains 1 .. 9 once. false otherwise.
    */
   public function isBoxValid($x, $y) {
       // YOUR CODE GOES HERE





   }
}