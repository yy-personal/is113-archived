<?php

require_once 'PersonDAO.php';
// By importing this file, we can create a DAO object.
// DAO object's $people is an Array of Person objects.
$dao = new PersonDAO();


// YOUR CODE GOES HERE


?>
<html>
<head>
    <title>Dating - Find Me Matches</title>
</head>
<body>
    <h3>Find Me Matches</h3>

    <form action='match.php' method='POST'>

        Gender: 
        <input type='radio' name='gender' value='M' checked> Male
        <input type='radio' name='gender' value='F'> Female
        <br>

        <select name='category'>
            <option value='age'> Age </option>
            <option value='height'> Height </option>
            <option value='weight'> Weight </option>
        </select>

        <select name='operator'>
            <option value='>'>Greater Than</option>
            <option value='<'>Less Than</option>
        </select>
        <input type='number' name='category_value' required>

        <br>
        <input type='submit' name='match_button' value='Find Matching Profiles'>
    </form>

    <!-- Display Matches if found -->
    <?php
    
        // YOUR CODE GOES HERE



        
    ?>
</body>
</html>