<?php

require_once 'CatDAO.php';
$dao = new CatDAO();

// Form Processing
$msg = '';
if( isset($_GET['name']) && trim($_GET['name']) != '' )
{
    $name = $_GET['name'];

    $result = $dao->delete($name);
    if( $result ) {
        $msg = "Cat $name has been deleted";
    }
    else {
        $msg = "Cat $name could not be deleted";
    }
}

$cats = $dao->getCats();

?>
<html>
<head>
    <title>Delete a cat</title>
</head>
<body>

<?php
    echo "<h2>$msg</h2>";
?>

<h1>Delete a cat</h1>

<form action='delete.php' method='GET'>

    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Delete Link</th>
        </tr>

        <?php
            foreach($cats as $cat) {
                $catName = $cat->getName();

                echo "
                <tr>
                    <td>
                        $catName
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
                ";

                echo "
                    <td>
                        <a href='delete.php?name=$catName'>Delete</a>
                    </td>
                </tr>
                ";
            }
        ?>

    </table>

</form>

</body>
</html>