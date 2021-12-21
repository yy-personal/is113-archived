<?php
/* 
 * INSTRUCTIONS
 * 
 * The form below submits back to this same file.
 * If user clicks 'Like' button, display 'You like it!'.
 * If user clicks 'Haha' button, display 'You find it funny.'.
 * 
 * If user checks 'Bookmark', also display '  Bookmarked!'.
 * 
 * Examples:
 * 1.  User ticks 'Bookmark' then clicks 'Like' button.  
 * 		You like it!  Bookmarked!
 * 
 * 2.  'Bookmark' is unchecked and user clicks 'Haha' button.
 * 		You find it funny. 
 */

// YOUR CODE GOES HERE

$msg = '';
if( isset($_POST['feeling']) )
	if( $_POST['feeling'] == 'Like' )
		$msg = 'You like it!';
	else
		$msg = 'You find it funny.';

if( isset($_POST['bookmark'])) {
	$msg .= '  Bookmarked!';
}

?>

<!-- Do NOT change the lines of code below.  They are correct -->
<html>
<body>
	<form method='POST' action='like.php'>
		<p>
		People say that nothing is impossible but I do nothing all the time
		</p>
		<input type='submit' name='feeling' value='Like'>
		<input type='submit' name='feeling' value='Haha'>
		<input type='checkbox' name='bookmark' id='bookmark' />
		<label for='bookmark'>Bookmark</label>
	</form>
	
	<p> <?=$msg ?> </p>
	
</body>
</html>