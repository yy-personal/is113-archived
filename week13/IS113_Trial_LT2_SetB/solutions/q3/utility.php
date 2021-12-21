<?php

# This function displays a given maze on the webpage.
# The write-up includes an image that shows how an example 
# how the maze should be displayed.
function display_maze($maze){
	echo "<table id='mazetable'>";
	for($i=0; $i<count($maze); $i++){
		echo "<tr>";
		for($j=0; $j<count($maze[$i]); $j++){
			$elem = $maze[$i][$j];
			if ($elem === "S"){
				echo "<td><img src='mario.png'/></td>";
			}
			elseif($elem === "E"){
				echo "<td><img src='end.png'/></td>";
			}
			elseif ($elem == 1){
				echo "<td><img src='obstacle.png'/></td>";
			}
			else{
				echo "<td><img src='empty.png'/></td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
}

# This function get the start ("S") and end ("E") cells in the maze.
# It returns an array of two Point objects
# The first Point object stores the row and column ids of the start cell.
# The second Point object stores the row and column ids of the end cell.
function get_start_end_points($maze){
	$start = NULL;
	$end = NULL;
	for($i=0; $i<count($maze); $i++){
		for($j=0; $j<count($maze[$i]); $j++){
			if ($maze[$i][$j]==='S'){
				$start = new Point($i,$j);
			}else if ($maze[$i][$j]==='E'){
				$end = new Point($i,$j);
			}			
		}
	}	
	return [$start,$end];
}

# This function finds a path from the $start point to the $end point in $maze.
# $start and $end are not the same cell in $maze.
# You can assume that there is no obstacle $maze.
# It returns an array of strings indicating move operations if such path exists, OR 
# an empty array otherwise.
# There are four strings: "L" (Move One Cell Left), "R" (Move One Cell Right), 
#                         "U" (Move One Cell Up), "D" (Move One Cell Down)
function find_path_no_obstacle($maze, $start, $end){
	$path = [];
    
    # Move vertically
	if($start->getRow_id() > $end->getRow_id()){
		for($i=$end->getRow_id(); $i<$start->getRow_id(); $i++){
			$path[] = "U";
		}
	}
	else{
		for($i=$start->getRow_id(); $i<$end->getRow_id(); $i++){
			$path[] = "D";
		}
	}

	# Move horizontally
	if($start->getCol_id() > $end->getCol_id()){
		for($i=$end->getCol_id(); $i<$start->getCol_id(); $i++){
			$path[] = "L";
		}
	}
	else{
		for($i=$start->getCol_id(); $i<$end->getCol_id(); $i++){
			$path[] = "R";
		}
	}
	
	return $path;
}

# Check if point $n represents a valid cell in $maze
function in_maze(Point $n, $maze){
	return $n->getRow_id() >= 0 && 
		   $n->getRow_id() < count($maze) && 
		   $n->getCol_id() >= 0 && 
		   $n->getCol_id() < count($maze[0]); 
}

# This function finds a path from the $start point to the $end point in $maze.
# $start and $end are not the same cell in $maze.
# $maze may contain some obstacles.
# It returns an array of strings indicating move operations if such path exists, OR 
# an empty array otherwise.
# There are four strings: "L" (Move One Cell Left), "R" (Move One Cell Right), 
#                         "U" (Move One Cell Up), "D" (Move One Cell Down)
function find_path($maze, $start, $end){
    $path = [];
    
	# $traceback is a 2D array to store the last motion before reaching cell (i,j)
	$traceback = [];					
	
	# Initialize $traceback 
	for ($i=0; $i<count($maze); $i++){
		$traceback_row = [];
		for ($j=0; $j<count($maze[$i]); $j++){
			$traceback_row[] = NULL; // NULL means $maze[$i][$j] is not visited yet
        }
        $traceback[] = $traceback_row;
	}
	
    # $to_visit stores nodes to visit in the $maze
    # Initially it only contains $start
    $to_visit = [$start];
    $traceback[$start->getRow_id()][$start->getCol_id()] = "START"; // Mark start node with special symbol
	$current_index = 0;
	while ($current_index < count($to_visit) && # Continue while there are unvisited nodes
			$traceback[$end->getRow_id()][$end->getCol_id()] == NULL) # and the end node is not reached yet
	{ 
		# Get next node from $to_visit
		$p = $to_visit[$current_index];
		$current_index++;

		# Find neighbors of $p and add them to $to_visit
		for ($i=-1; $i<=1; $i++){
			for($j=-1; $j<=1; $j++){
				if ($i*$j==0 && $i+$j!=0){
					# A neighbor $n is a cell that is one step away
					# Four kinds of steps are supported: Up (U), Down (D), Left (L), Right (R)
					# Diagonal move is not supported 
					$n = new Point($p->getRow_id()+$i,$p->getCol_id()+$j);
					if (in_maze($n, $maze) && # $n is in $maze
						$traceback[$n->getRow_id()][$n->getCol_id()] == NULL && # $n is not visited before 
						$maze[$n->getRow_id()][$n->getCol_id()] != 1) # $n is not an obstacle
					{ 
						$to_visit[] = $n; # Add $n to $to_visit
						
						# Update $traceback to store the move leading to $n
						if ($i==0 && $j==1){
							$traceback[$n->getRow_id()][$n->getCol_id()]='R';
						}
						else if ($i==0 && $j==-1){
							$traceback[$n->getRow_id()][$n->getCol_id()]='L';
						}
						else if ($i==1 && $j==0){
							$traceback[$n->getRow_id()][$n->getCol_id()]='D';
						}
						else if ($i==-1 && $j==0){
							$traceback[$n->getRow_id()][$n->getCol_id()]='U';
						}
					}
				}
			}
		}
	}

	if ($traceback[$end->getRow_id()][$end->getCol_id()] == NULL){ # End point cannot be reached
		return $path;	
	} else{
		# Go backward from $end retracing all the steps that we have 
		# taken to get to it from $start
		
		# $p is the current point, initially set to be the end point
		$p = new Point($end->getRow_id(),$end->getCol_id());
		
		# Trace back one step at-a-time
		while($traceback[$p->getRow_id()][$p->getCol_id()] != "START"){ # While we haven't reach $start yet
			
            # Obtain the previous step and append it to $path
            # This will eventually result in a path from $end to $start
			$d = $traceback[$p->getRow_id()][$p->getCol_id()];
			$path[] = $d;

			# Update $p by undo-ing the previous step
			if ($d == 'D'){
				$p->setRow_id($p->getRow_id()-1);
			}else if ($d =='U'){
				$p->setRow_id($p->getRow_id()+1);
			}else if ($d == 'L'){
				$p->setCol_id($p->getCol_id()+1);
			}else if ($d == 'R'){
				$p->setCol_id($p->getCol_id()-1);
			}
		}
		
		# Return path from $start to $end by reversing $path
		return array_reverse($path);
	}
}

######### DO NOT CHANGE THE FOLLOWING FUNCTIONS ######### 

# Generate and repopulate the height drop-down list
function generate_height_box(){
	echo "<select id='heightbox' name='height'>";	
	$selected_height = 5;
	if (isset($_POST["height"])){ 
		$selected_height = $_POST["height"];
	}
	for($i=5; $i<=20; $i+=5){
		$selected = "";
		if ($i == $selected_height){
			$selected = "selected";
		}	
		echo "<option value='$i' $selected>$i</option>";
	}
	echo "</select>";
}

# Generate and repopulate the width drop-down list
function generate_width_box(){
	echo "<select id='widthbox' name='width'>";
	$selected_width=5;
	if (isset($_POST["width"])){ 
		$selected_width = $_POST["width"];
	}
	for($i=5; $i<=20; $i+=5){
		$selected = "";
		if ($i==$selected_width){
			$selected = "selected";
		}	
		echo "<option value='$i' $selected>$i</option>";
	}
	echo "</select>";
}

# This function generates a random maze and returns it as a 2D array
# Each cell in the array has one of the following values:
#     - 0 => Empty Cell
#     - 1 => Obstacle Cell
#     - S => Start Cell
#     - E => End Cell
function generate_maze($has_obstacles){
	
	# Get maze dimension
	$height = 5;
	$width = 5;
	if (isset($_POST["height"])){ 
		$height = $_POST["height"];
		$width = $_POST["width"];
	}

	# Randomly create the maze of the given dimension
	# Put obstacles and empty slots (grass slots)
	$maze = [];
	for($i=0; $i<$height; $i++){
		$row = [];
		for($j=0; $j<$width; $j++){
			if ($has_obstacles){
				if (rand()%5 == 0){
					$row[] = 1;
				}else{
					$row[] = 0;
				}
			}else{
				$row[] = 0;
			}
		}
		$maze[] = $row;
	}

	# Put starting and end points
	$start_x = rand(0,$height-1);
	$start_y = rand(0,$width-1);
	do{
		$end_x = rand(0,$height-1);
		$end_y = rand(0,$width-1);
	}
	while ($start_x == $end_x && $start_y == $end_y);	
	$maze[$start_x][$start_y]='S';
	$maze[$end_x][$end_y]='E';

	return $maze;
}

#########################################################################
?>