<?php

/*
    Student is eligible to join CCA if he/she meets ALL of the following conditions:
    
    1) He/she can be of any gender
    2) He/she must have a minimum GPA of 2.75 (greater than or equal to 2.75)
    3) He/she must be Year 2 or above
    4) He/she must belong to SIS or LKCSB
*/

// Custom Function
function is_eligible($gpa, $year, $schools)
{
    /* 
        This function checks to see if a student's eligible to join CCA
        given his/her $gpa, $year, $schools (Indexed Array).

        Design your custom function to return a 'return value'.
        It can be a String, number, or Boolean TRUE/FALSE.
    */
    
    // Your code goes here
}

if( isset($_GET['submit_check']) )
{
    // We are here because the user pressed SUBMIT button
    echo "Someone pressed the SUBMIT button !!!<br>
    Now you can retrieve form submission and perform form validation.<br>
    Check the URL. This form uses GET.<br>
    So, you should be able to see form submission data as part of the URL.
    ";

    // Somewhere down here... after form validation
    // you will call the above-defined custom function is_eligible()
}
else
{
    // We are here because the user visited check.php for the first time
    // (loading it for the first time in web browser)
    // (NOT as a result of pressing SUBMIT button)
    echo "This page is being visited fresh - loading for the first time<br>
    NOT as a result of pressing the SUBMIT button !!!<br>
    There's been NO form submission.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CCA Check</title>
</head>
<body>

    <h1>Check Your Eligibility</h1>


    <form action='check.php' method='GET'>

        Cumulative SMU GPA:
        <input type='text' name='gpa' placeholder='e.g. 2.75' size='10', maxlength='5'>

        <br><br>

        Gender:
        <select name='gender'>
            <option value='girl'> Girl </option>
            <option value='boy'> Boy </option>
        </select>

        <br><br>
        
        What Year Are You?
        <br>
        <input type='radio' name='year' value='1'> 1
        <input type='radio' name='year' value='2'> 2
        <input type='radio' name='year' value='3'> 3
        <input type='radio' name='year' value='4'> 4

        <br><br>
        Which school(s) do you belong to?
        <br>
        <input type='checkbox' name='schools[]' value='SOA'> SOA <br>
        <input type='checkbox' name='schools[]' value='LKCSB'> LKCSB <br>
        <input type='checkbox' name='schools[]' value='SOL'> SOL <br>
        <input type='checkbox' name='schools[]' value='SOSS'> SOSS <br>
        <input type='checkbox' name='schools[]' value='SOE'> SOE <br>
        <input type='checkbox' name='schools[]' value='SIS'> SIS

        <br><br>
        <input type='submit' name='submit_check' value='Check'>

    </form>

    <hr>
    Refresh this page empty by clicking <a href='check.php'>HERE</a>
    <br>
    Back to <a href='../cca/'>CCA Directory Page</a>

</body>
</html>