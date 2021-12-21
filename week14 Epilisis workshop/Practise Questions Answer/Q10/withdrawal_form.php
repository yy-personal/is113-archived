<html>
<body>
	<h1>SMU withdrawl form</h1>
	<form action="" method='GET'>
		<table border='1'>
		<tr>
			<th>
				Name (as in student card)
			</th>
			<td colspan='3'>
				<input type='text' name='name'/>
			</td>
		</tr>
		<tr>
			<th>
				Gender
			</th>
			<td>
			    <input type='radio' name='gender' value='m' /> Male
				<input type='radio' name='gender' value='f' /> Female
			</td>
			<th rowspan='2'>
				Are you Current Receiving any SMU Scholarships/Bursaries? Please ✅ accordingly?
			</th>
			<td rowspan='2'>
				<input type='checkbox' name='bursaries[]' value='yes'/> Yes<br/>
				<input type='checkbox' name='bursaries[]' value='no' /> No<br/>
			</td>
		</tr>
		<tr>
			<th>
				Programme Enrolled
			</th>
			<td>
				<select name='programme'>
					<option value=''></option>
					<option value='Law'>Bachelor or Law</option>
					<option value='Business'>Bachelor or Business</option>
                    <option value='Information System'>Bachelor of Science (Inforamtion System)</option>
                    <option value='Econs'>Bachelor of Economics</option>
                    <option value='Social Science'>Bachelor of Social Science</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='4'>
				<input type='submit' name='btnSend' value='Send the form!' />
			</td>
		</tr>
		</table>
	
    </form>

	<?php
	if (isset($_GET['btnSend'])){
		$errorMsg = [];
		$name = $_GET['name'];
		$gender = $_GET['gender'];
		$bursaries = $_GET['bursaries'];
		$program = $_GET['programme'];

		if ($name == ""){
			$errorMsg[] = "Name field cannot be blank";
		}
		if (count($bursaries) == 0){
			$errorMsg[] = "Must indicate scholarship or bursaries information";
		}
		if (!isset($_GET['programme']) || $program == "") {
			$errorMsg[] = "Must select a programme type";
		}
		if ($gender == null){
			$errorMsg[] = "Must indicate your gender";
		}
		if ($errorMsg == []){
			if ($gender == 'm'){
				echo "<h4>Hi, Mr $name you have successfully submitted your withdrawal form</h4>";
			} else {
				echo "<h4>Hi, Ms $name you have successfully submitted your withdrawal form</h4>";
			}
		}
		echo "<ul>";
		foreach ($errorMsg as $singleError){
			echo "<li>$singleError</li>";
		}
		echo "</ul>";
	}
    ?>

</body>
</html>