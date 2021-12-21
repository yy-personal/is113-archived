<?php

require_once 'include/common.php';

$searchResults = [];
$search = '';

$id = $_REQUEST['id'];

$clubDAO = new ClubDAO();
$club = $clubDAO->get($id);
$members = $clubDAO->getMembers($id);

$hasSearch = isset($_GET['btnSearch']);
if ( $hasSearch ) {
	$search = $_GET['search'];
	
	$personDAO = new PersonDAO();
	$searchResults = $personDAO->search($search);
	
}


?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
	
	<h1><?=$club->getName()?>: Add members </h1>
	<p> <a href='view_club.php?id=<?=$club->getID()?>'>Back to club</a></p>
	<?php
		if ( $club->isActive() ) {
	?>
		<form action='add_members.php' method='get'>
			<input type='hidden' name='id' value='<?=$id?>' />
			
			Name <input name='search' value='<?=$search?>' />
			
			<input type='submit' name='btnSearch' value='Search' />
		</form>
	<?php
		} else {
	?>			
			<p class='highlight'>
				Can't add member to inactive club!
			</p>
	<?php
		} // if ( $club->isActive() )

		if ( $hasSearch ) {
			echo "
				<h1>Search results</h1>
			";
			if ( count($searchResults) == 0) {
				echo "
					<p class='highlight'>No result found.</p>
				";
				
			} else {
				?>		
				<form action='add_members_process.php' method='post'>
					<input type='hidden' name='id' value='<?=$id?>' />
					
					<ol>
					<?php
						foreach ($searchResults as $person) {
							if ( in_array($person, $members) ) {
								echo "
									<li>
										{$person->getName()}
									</li>
								";
							} else {
								echo "
									<li>
										<label>
											<input type='checkbox' name='memberIDs[]' value='{$person->getID()}' />
											{$person->getName()}
										</label>
									</li>
								";
							}
						} // foreach
					?>
					</ol>
					
					<input type='submit' name='btnAdd' value='Add members' />
				</form>
				<?php
			} // if ( count($searchResults) == 0)
		} // if ( $hasSearch )
	?>

	<?php
	include 'footer.php';
	?>

</body>
</html>
