<?php

require_once 'PersonDAO.php';
// By importing this file, we can create a DAO object.
// DAO object's $people is an Array of Person objects.
$dao = new PersonDAO();
$people = $dao->getPeople();

// Check if we're here after Form Submission
if( isset($_POST['match_button']) ) {
    //var_dump($_POST);

    if( isset($_POST['gender']) && isset($_POST['category']) && isset($_POST['operator']) && isset($_POST['category_value']) ) {
        
        $matches = []; // Store match results (IF ANY)

        $gender = $_POST['gender'];
        $category = $_POST['category'];
        $operator = $_POST['operator'];
        $category_value = $_POST['category_value'];

        // Loop through $people array
        foreach($people as $person) {

            // Each item in the Array is a Person object
            if( $person->getGender() == $gender) {
                // Check if the user-specified operator (in FORM) is > or < sign.
                if( $operator == ">" ) {
                    // User specified > (grater than)
                    // Thus, perform > comparison
                    if( $person->getAttributeValue($category) > $category_value ) {
                        // Found Match
                        // Add this $person (associative array) into $matches[]
                        $matches[] = $person;
                    }
                }
                else {
                    // <
                    // User specified < (less than)
                    // Thus, perform < comparison
                    if( $person->getAttributeValue($category) < $category_value ) {
                        // Found Match
                        // Add this $person (associative array) into $matches[]
                        $matches[] = $person;
                    }
                }
            }//end-if

        }//end-foreach
    }
}

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
        if( isset($matches) ) {
            if( count($matches) > 0  ) {
                $label = 'Matches';
                $count = count($matches);
                echo "<table border='1'>
                        <tr>
                            <th colspan='$count'>$label ($count)</th>
                        </tr>
                        <tr>
                    ";
                foreach($matches as $person) { // $person is a Person object
                    echo "
                            <td>
                                <table border='1'>
                                    <tr>
                                        <th colspan='2'>
                                            <img src='images/{$person->getImage()}'>
                                        </th>
                                    </tr>
                    ";

                    echo "
                                    <tr>
                                        <td>fullname</td>
                                        <td>{$person->getFullname()}</td>
                                    </tr>
                                    <tr>
                                        <td>gender</td>
                                        <td>{$person->getGender()}</td>
                                    </tr>
                                    <tr>
                                        <td>age</td>
                                        <td>{$person->getAge()}</td>
                                    </tr>
                                    <tr>
                                        <td>height</td>
                                        <td>{$person->getHeight()}</td>
                                    </tr>
                                    <tr>
                                        <td>weight</td>
                                        <td>{$person->getWeight()}</td>
                                    </tr>
                                </table>
                            </td>
                    ";
                }
                echo "
                        </tr>
                    </table>
                ";
            }
        }
    ?>
</body>
</html>