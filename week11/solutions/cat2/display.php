<?php

require_once 'CatDAO.php';
$dao = new CatDAO();


// Form Processing
$status = '';
if( isset($_POST['status']) ) {
    $status = $_POST['status'];
}

// Now that we know the status, retrieve all cats matching the search criterion

if( $status == '')
    $cats = $dao->getCats();
else
    $cats = $dao->getCatsByStatus($status);
    
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
                $selected_A = '';
                if($status == 'A')
                    $selected_A = 'selected';
                
                $selected_B = '';
                if($status == 'P')
                    $selected_B = 'selected';
            ?>
            
            <option value='A' <?= $selected_A ?>>Available</option>
            <option value='P' <?= $selected_B ?>>Pending Adoption</option>
        </select>

        <br><br>
        <input type='Submit' value='Filter'>

    </form>
</body>
</html>