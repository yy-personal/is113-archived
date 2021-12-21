<?php

require_once 'CatDAO.php';
$dao = new CatDAO();

// Form Processing
$msg = '';
if( isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender']) 
    && trim($_POST['name']) != '' )
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $result = $dao->add($name, $age, $gender);
    if( $result ) {
        $msg = 'A new cat has been added';
    }
    else {
        $msg ='Could not add a new cat';
    }
}

$cats = $dao->getCats();

?>
<html>
<head>
    <title>Add a new cat</title>
</head>
<body>

<h1>All Cats</h1>
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

<hr>

<?php
    echo "<h2>$msg</h2>";
?>

<h1>Add a new cat</h1>

<form action='add.php' method='POST'>

    Name: <input type='text' name='name'>
    
    <br><br>
    Age: <input type='number' name='age'>
    
    <br><br>
    Gender:
        <label>
            <input type='radio' name='gender' value='F'> Female
        </label>
        <label>
            <input type='radio' name='gender' value='M'> Male
        </label>

    <br><br>
    <input type='submit' value='Add Cat'>

</form>

</body>
</html>