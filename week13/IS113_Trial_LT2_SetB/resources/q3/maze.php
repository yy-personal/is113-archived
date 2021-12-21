<?php 
	require_once("Point.php");
	session_start();
	require_once("utility.php");
	$animation = "";
	if(isset($_POST["find_path"])){
		$animation = "onload='animation()'";
	}
?>

<html>
	<head>
		<script type="text/javascript" src="animation.js"></script>
		<link rel="stylesheet" type="text/css" href="maze.css"/> 
	</head>

	<body <?= $animation?>>
		<form action="maze.php" method="post">
			Height: <?php generate_height_box();?>
			Width: <?php generate_width_box();?>
			<?php 
				# Repopulate include obstacles checkbox 
				$has_obstacles = "";
				if(isset($_POST["has_obstacles"])){
					if ($_POST["has_obstacles"]){
						$has_obstacles = "checked";
					} 
				}
			?> 
			<input type="checkbox" name="has_obstacles" <?= $has_obstacles?>/> Include Obstacles
			<input type="submit" name="generate_maze" value="Generate Maze"/>	
		
			<?php
				$path = [];
				if (isset($_POST["find_path"])){ # When Find Path button is clicked
					$maze = $_SESSION["maze"];
					$start_end = get_start_end_points($maze);
					if($_SESSION["has_obstacles"] === FALSE){
						$path = find_path_no_obstacle($maze, $start_end[0], $start_end[1]);
					}
					else{
						$path = find_path($maze, $start_end[0], $start_end[1]);
					}					
				}
				else{ # When the page loads for the first time OR 
					# when Generate Maze button is clicked
					$has_obstacles = FALSE;
					if(isset($_POST["has_obstacles"])){
						$has_obstacles = $_POST["has_obstacles"];
					}
					$maze = generate_maze($has_obstacles);
					$_SESSION["maze"] = $maze;
					$_SESSION["has_obstacles"] = $has_obstacles;
				}
				echo "<table>
						<tr>
							<td>";
				display_maze($maze);
				echo "		</td>
							<td style='padding:50px'>
								<div id='motion'>
								</div>
								<div id='result'>
								</div>
							</td>
						</tr>
				</table>
				<br/>";
				echo "<input type='hidden' id='hiddenpath' value='" . implode($path) . "'/>";
			?>
			<input type="submit" name="find_path" value="Find Path"/>
		</form>	
	</body>
</html>