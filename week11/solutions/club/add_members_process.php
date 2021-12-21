<?php

require_once 'include/common.php';

$msg = '';

$id = $_POST['id'];

$clubDAO = new ClubDAO();
$club = $clubDAO->get($id);


if ( !isset($_POST['memberIDs']) ) {
	$msg = 'No one selected';

} else {
	$memberIDs = $_POST['memberIDs'];
	
	$personDAO = new PersonDAO();
	$memberNames = [];
	foreach ($memberIDs as $memberID) {
		$memberNames[] = $personDAO->get($memberID)->getName();
		$clubDAO->addMember($id, $memberID);
	}
	
	$msg = implode(', ', $memberNames) . ' added!';

}



?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
	
	<h1><?=$club->getName()?></h1>
	<p> 
		<a href='view_club.php?id=<?=$club->getID()?>'>Back to club</a> | 
		<a href='add_members.php?id=<?=$club->getID()?>'>Add more members</a>
	</p>
	<p class='highlight'>
		<?=$msg?>
	</p>
	
	<?php
	include 'footer.php';
	?>
	
</body>
</html>
