<?php

function minimumSteps($array, $start, $end){

    $moveCount = 0; 
    $layerCellsLeft = 1;
    $nextLayerCells = 0;
    $reached_end = false;

    # [Up, Down, Left, Right] direction vectors
    $dr = [-1, 1, 0, 0];
    $dc = [0, 0, 1, -1];
    $maxR = count($array); $maxC = count($array);

    # Create R x C matrix of false values to track 
    $visited = [];
    for ($i = 0; $i < $maxR; $i++){
        $temp = [];
        for($j = 0; $j<$maxC; $j++){
            array_push($temp, False);
        }
        $visited[] = $temp;
        $temp = [];
    }
    ////////////////////////////////////////
    # Visual representation of array $visited
    // $visited = [
    //     [False, False, False, False], 
    //     [False, False, False, False], 
    //     [False, False, False, False], 
    //     [False, False, False, False]
    // ];
    ////////////////////////////////////////

    $rqueue = []; 
    $cqueue = [];

    $rqueue[] = $start[0];
    $cqueue[] = $start[1];
    $visited[$start[0]][$start[1]] = True;

    while (count($rqueue) > 0){

        #remove first element from queue
        $r = array_shift($rqueue);
        $c = array_shift($cqueue);

        #Check if the end has been reached
        if ($r == $end[0] && $c === $end[1]){
            $reached_end = True;
            break; #break off the while loop
        }

        #explore neighbouring cells
        for($i = 0; $i < 4; $i++){
                #[Up,Down,Left,Right]
            // $dr = [-1, 1, 0, 0];
            // $dc = [0, 0, 1, -1];
            $newr = $r + $dr[$i];
            $newc = $c + $dc[$i];

            #Skip if out of bound
            if ($newr < 0 || $newc < 0){
                continue;
            }
            if( $newr >= $maxR || $newc >= $maxC){
                continue;
            }

            #Skip if visited
            if ($visited[$newr][$newc]){
                continue;
            }
            #Skip blocked cells
            if($array[$newr][$newc] == True){
                continue;
            }

            #Add new coordinates
            $rqueue[] = $newr;
            $cqueue[] = $newc;

            #Updated visited cells
            $visited[$newr][$newc] = True;

            #Track next batch of cells
            $nextLayerCells++;
        }

        #Track number of steps (Layers by Layers)
        $layerCellsLeft--;
        if ($layerCellsLeft == 0){
            $layerCellsLeft = $nextLayerCells;
            $nextLayerCells = 0;
            $moveCount++;
        }
    }

    if ($reached_end){
        return $moveCount;
    }
    return -1;
}

$array = [
    [False, False, False, False], 
    [True, True, False, True], 
    [False, False, False, False], 
    [False, False, False, False]
];


echo minimumSteps($array, [3,0], [0,0]);
echo minimumSteps($array, [3,3], [0,0]);
echo minimumSteps($array, [3,0], [0,3]);
