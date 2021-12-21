<?php
    session_start();
    $errors=[];
    $age = '';
    $gender = '';
    $candidates = '';
    if(isset($_SESSION['errors'])){
        $errors = $_SESSION['errors'];
        // unset($_SESSION['errors']);
        
    }
    // var_dump($errors);
?>
<html>
<body>

<?php
if(count($errors)>0){
    $errors_num = count($errors);
    echo "<h2>You have $errors_num errors in your form, rectify and submit.</h2>";
    echo "
    <ol>";
    foreach($errors as $error){
        echo "<li>$error</li>";
    }
    echo "
    </ol>";
}
else{
    echo "<h2>Vote Today!</h2>";
}
if(isset($_SESSION['age'])){
    $age = $_SESSION['age'];
}

if(isset($_SESSION['gender'])){
    if($_SESSION['gender']=='Male'){
        $selected_f='';
        $selected_m='checked';
    }
    elseif($_SESSION['gender']=='Female'){
        $selected_f='checked';
        $selected_m='';
    }
}
else{
    $selected_f='';
    $selected_m='';
}
function printCandidate($candidate){
    if(isset($_SESSION['candidates'])){
        // $candidates = $_SESSION['candidates'];
        // var_dump($_SESSION['candidates']);
        if(in_array($candidate,$_SESSION['candidates'])){
            echo "checked";
        }
    }
}
var_dump($_SESSION);
// var_dump(printCandidate('Donald Trump'));
// var_dump(printCandidate('Ted Cruz'));
// var_dump(printCandidate('Jeb Bush'));
// var_dump(printCandidate('Marco Rubio'));
?>



    <form method='GET' action='process_vote.php'>

        Your age: <input type='text' name='age' value = <?=$age?>><br>
        Your gender: <input type='radio' name='gender' value='Female' <?=$selected_f?>>Female
        <input type='radio' name='gender' value='Male' <?=$selected_m?>>Male<br>

        District candidates (pick up to 2): <br>
        <input type='checkbox' name='candidates[]' value='Donald Trump' <?=printCandidate('Donald Trump')?>>Donald Trump<br>
        <input type='checkbox' name='candidates[]' value='Ted Cruz' <?=printCandidate('Ted Cruz')?>>Ted Cruz<br>
        <input type='checkbox' name='candidates[]' value='Jeb Bush' <?=printCandidate('Jeb Bush')?>>Jeb Bush<br>
        <input type='checkbox' name='candidates[]' value='Marco Rubio' <?=printCandidate('Marco Rubio')?>>Marco Rubio<br>

        <input type='submit' value='Vote Today'>
    </form>
</body>
</html>
<?php
session_unset();
?>
