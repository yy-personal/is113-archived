<?php

require_once 'include/common.php';

$msg = '';

$id = $_REQUEST['id'];

$clubDAO = new ClubDAO();
$club = $clubDAO->get($id);

if ( isset($_POST['btnSave']) ) {
	
	$name = trim($_POST['name']);
	
	if ( strlen($name) == 0) {
		$msg = 'Empty name';
		
	} else {
		$club->setName( $name);
		$club->setActive( isset($_POST['active']));
		$clubDAO->update($club);
		$msg = 'Saved!';
	}
}

if ( isset($_POST['btnRemove']) ) {

	if ( !isset($_POST['memberIDs']) ) {
		$msg = 'No member selected';

	} else {
		$memberIDs = $_POST['memberIDs'];
		
		$personDAO = new PersonDAO();
		$memberNames = [];
		foreach ($memberIDs as $memberID) {
			$memberNames[] = $personDAO->get($memberID)->getName();
			$clubDAO->removeMember($id, $memberID);
		}
		
		$msg = implode(', ', $memberNames) . ' removed!';

	}
}

$members = $clubDAO->getMembers($id);
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
	
	<p class='highlight'><?=$msg?></p>
	
	<h1>Club's details</h1>
	
	<form action='view_club.php' method='post'>
		<input type="hidden" name="id" value='<?=$id?>'/>
		<table>
		<tr>
			<th>Name</th>
			<td>
				<input name='name' value='<?=$club->getName()?>' />
			</td>
		</tr>
		<tr>
			<th>Is active?</th>
			<td>
				<?php
					$checked = $club->isActive() ? 'checked' : '';
				?>
				<label>
					 <input type='checkbox' name='active' <?=$checked?> />			
				</label>
			</td>
		</tr>
		</table>

		
		<input type='submit' name='btnSave' value='Save' />
	</form>
	
	
	<h1>Club's Members</h1>
	
	<?php
		if (count($members) > 0) {
			?>
			<form action='view_club.php' method='post'>
				<input type="hidden" name="id" value='<?=$id?>'/>
				<?php
					foreach ($members as $person) {
						echo "
							<label>
								<input type='checkbox' name='memberIDs[]' value='{$person->getID()}' />
								{$person->getName()}
							</label><br/>
						";
					}
				?>
				
				<input type='submit' name='btnRemove' value='Remove selected members' />
			</form>
			<?php
		} else {
			echo '
				<p>No member.</p>
			';
		}
	?>
	
	<p>
		<a href='add_members.php?id=<?=$id?>'>Add members >> </a>
	</p>

	<?php
	include 'footer.php';
	?>
	
</body>
</html>
