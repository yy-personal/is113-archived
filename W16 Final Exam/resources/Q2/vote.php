<?php
    session_start();
?>
<html>
<body>

<?php
$inputted_age = '';
$m_checked='';
$f_checked='';
if(!isset($_SESSION['errors'])){
    echo "<h2>Vote Today!</h2>";
}
else{
    $errors = $_SESSION['errors'];
    
    $num_errors = count($errors);
    echo "You have $num_errors errors in submission, plz fix.";
    echo "<ol>";
    foreach($errors as $error){
        echo "<li>$error</li>";
    }
    echo "</ol>";
}
if(isset($_SESSION['age'])){
    $inputted_age = $_SESSION['age'];
}
if(isset($_SESSION['gender'])){
    if($_SESSION['gender']=='Male'){
        $m_checked = 'checked';
    }
    elseif($_SESSION['gender']=='Female'){
        $f_checked = 'checked';
    }
}
var_dump($_SESSION);
session_unset();
?>



    <form method='GET' action='process_vote.php'>

        Your age: <input type='text' name='age' value='<?=$inputted_age?>'><br>
        Your gender: <input type='radio' name='gender' value='Female' <?=$f_checked?>>Female
        <input type='radio' name='gender' value='Male' <?=$m_checked?>>Male<br>

        District candidates (pick up to 2): <br>
        <input type='checkbox' name='candidates[]' value='Donald Trump'>Donald Trump<br>
        <input type='checkbox' name='candidates[]' value='Ted Cruz'>Ted Cruz<br>
        <input type='checkbox' name='candidates[]' value='Jeb Bush'>Jeb Bush<br>
        <input type='checkbox' name='candidates[]' value='Marco Rubio'>Marco Rubio<br>

        <input type='submit' value='Vote Today'>
    </form>
</body>
</html>
