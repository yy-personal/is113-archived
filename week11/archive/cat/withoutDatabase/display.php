<?php

require_once 'CatDAO.php';
$dao = new CatDAO();


// Form Processing
$status = '';
$gender = '';
if( isset($_POST['status']) ) {
    $status = $_POST['status'];
}
if( isset($_POST['gender']) ) {
    if( $_POST['gender']=='Female'){
        $gender = 'F';
    }
    elseif( $_POST['gender']=='Male'){
        $gender = 'M';
    }
}
// var_dump($status);
// var_dump($gender);
// var_dump($dao);
// Now that we know the status, retrieve all cats matching the search criterion

$cats = $dao->getCats();

// YOUR CODE GOES HERE
if($status != '' and $gender != ''){
    $cats = $dao->getCatsByGenderStatus($gender, $status);
}

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
                    if( $cat->getStatus() == 'P' ) {
                        $status_msg = 'Pending Adoption';
                    }
                    
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
        Gender:
        <?php
        $f_checked = '';
        $m_checked = '';
        if($gender == 'F'){
            $f_checked = 'checked';
        }
        elseif($gender == 'M'){
            $m_checked = 'checked';
        }
        echo "
        <label>
        <input type='radio' name='gender' value='Female' $f_checked>Female
        </label>
        <label>
        <input type='radio' name='gender' value='Male' $m_checked>Male
        </label>
        ";
        
        ?>

        
        
        
                

            

        <br>
        Filter by Status:<br>
        <select name='status'>
            <?php
                $statusArr = [
                    'A' => 'Available',
                    'P' => 'Pending Adoption'
                ];

                foreach($statusArr as $key=>$value) {
                    $selected = '';
                    if($key == $status) {
                        $selected = 'selected';
                    }

                    echo "
                    <option value='$key' $selected> $value </option>
                    ";
                }

            ?>
        </select>

        <br><br>
        <input type='Submit' value='Filter'>

    </form>

<hr>
Click <a href='display.php'>here</a> to Reset This Page<br>

</body>
</html>