<?php

require_once 'include/common.php';

$clubDAO = new ClubDAO();
$clubs = $clubDAO->getAll();
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>

	<table>
	<tr>
		<th>Name</th>
		<th>Is Active?</th>
	</tr>
	<?php
		foreach ($clubs as $club) {
			$status = $club->isActive() ? 'Active' : 'Inactive';
			echo "
				<tr>
					<td>
						<a href='view_club.php?id={$club->getID()}' >{$club->getName()}</a>
					</td>
					<td>
						$status
					</td>
				</tr>
			";
		}		
	?>
	</table>
</body>
</html>
