<!DOCTYPE html>
<html>
<body>
<form>
	Operand 1 <input type="number" name="Operand1">
	<br>
	Operator 
	<select name="Operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>	
	</select>
	<br>
	Operand 2 <input type="number" name="Operand2">
	<br>
	<input type="submit" value="Calculate!">
</form>

<?php
	
	#Enter your code here
	if(!empty($_GET)){
		$op1 = $_GET['Operand1'];
		$op2 = $_GET['Operand2'];
		$opt = $_GET['Operator'];

		echo "<b>Answer is ". eval("return $op1 $opt $op2;");
	}
		 

?>
</body>
</html>