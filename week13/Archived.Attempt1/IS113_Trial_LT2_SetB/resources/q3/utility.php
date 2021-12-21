<?php

/*
    Name:

    Email:
*/


# This function displays a given maze on the webpage.
# The write-up includes an image that shows how an example 
# how the maze should be displayed.
function display_maze($maze){
	echo "<table id='mazetable'>";

	// Add code here

	echo "</table>";
}

# This function get the start ("S") and end ("E") cells in the maze.
# It returns an array of two Point objects
# The first Point object stores the row and column ids of the start cell.
# The second Point object stores the row and column ids of the end cell.
function get_start_end_points($maze){
	$start = NULL;
	$end = NULL;

	// Add code here 

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

	// Add code here

	return $path;
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

	// Add code here
	
	return $path;
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