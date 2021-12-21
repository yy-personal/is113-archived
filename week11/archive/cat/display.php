<?php

require_once 'CatDAO.php';
$dao = new CatDAO();


// Form Processing
$status = '';
if( isset($_POST['status']) ) {
    $status = $_POST['status'];
}

// Now that we know the status, retrieve all cats matching the search criterion

$cats = $dao->getCats();

// YOUR CODE GOES HERE
    
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