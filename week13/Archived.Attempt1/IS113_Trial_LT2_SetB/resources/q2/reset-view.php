<?php

require_once 'include/common.php';
printErrors();
var_dump($_SESSION);
?>

<html>
<head>
	<title>Password Reset</title>
</head>

<body>

	<h2>Password Reset</h2>
	<hr>

  <form method='POST' action='reset.php'>

		<table>

			<tr>
				<td>Username</td>
				<td><input type='text' size='20' name='username'></td>
			</tr>

			<tr>
				<td>Current Password</td>
				<td><input type='password' size='20' name='current_password'></td>
			</tr>

			<tr>
				<td>New Password</td>
				<td><input type='password' size='20' name='new_password[]'></td>
			</tr>

			<tr>
				<td>Re-type New Password</td>
				<td><input type='password' size='20' name='new_password[]'></td>
			</tr>

			<tr>
				<td colspan='2'><input type='submit' value='Reset Password'></td>
			</tr>

		</table>

	</form>
</body>
</html>
