<?php

require_once 'CatDAO.php';
$dao = new CatDAO();

//var_dump($_POST);

// Form Processing
$status = '';
$gender = '';
$max_age = '';
if( isset($_POST['status']) ) {
    $status = $_POST['status'];
    if( isset($_POST['gender']) )
        $gender = $_POST['gender'];
    $max_age = $_POST['max_age'];
}

// Now that we know the status, retrieve all cats matching the search criterion

if( $status == '')
    $cats = $dao->getCats();
else
    $cats = $dao->getCatsFilter($status, $gender, $max_age)
    
//var_dump($cats);

?>
<html>
<body>

    <h1>Our Cats</h1>

    <form action='display.php' method='POST'>

        <table border='1'>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Status</th>
            </tr>

            <?php
                foreach($cats as $cat) {
                    echo "
                        <tr>
                            <td>
                                {$cat->getName()}
                            </td>
                            <td>
                                {$cat->getAge()}
                            </td>
                            <td>
                                {$cat->getGender()}
                            </td>
                    ";
                    $status_msg = 'Available';
                    if( $cat->getStatus() == 'P' )
                        $status_msg = 'Pending Adoption';
                    
                    echo "
                            <td>
                                $status_msg
                            </td>
                        </tr>
                    ";
                }
            ?>

        </table>

        <br>
        Filter by Status:<br>
        <select name='status'>
            <?php
                $selected_none = '';
                if( $status == '-' )
                    $selected_none = 'selected';

                $selected_A = '';
                if( $status == 'A' )
                    $selected_A = 'selected';
                
                $selected_B = '';
                if( $status == 'P' )
                    $selected_B = 'selected';
            ?>
            
            <option value='-' <?= $selected_none ?>> --- </option>
            <option value='A' <?= $selected_A ?>>Available</option>
            <option value='P' <?= $selected_B ?>>Pending Adoption</option>
        </select>


        <br><br>

        <?php
            $selected_All = '';
            if( $gender == 'A' )
                $selected_All = 'checked';

            $selected_M = '';
            if( $gender == 'M' )
                $selected_M = 'checked';

            $selected_F = '';
            if( $gender == 'F' )
                $selected_F = 'checked';

            if( !$selected_All && !$selected_M && !$selected_F )
                $selected_All = 'checked';
        ?>

        <input type='radio' name='gender' value='A' <?= $selected_All ?> required> All
        <input type='radio' name='gender' value='M' <?= $selected_M ?> required> Male
        <input type='radio' name='gender' value='F' <?= $selected_F ?> required> Female

        <br><br>
        Max Age: <input type='number' name='max_age' value='<?= $max_age ?>'>

        <br>

        <br><br>
        <input type='Submit' value='Filter'>

    </form>
</body>
</html>