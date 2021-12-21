<?php

require_once 'CatDAO.php';
$dao = new CatDAO();

//var_dump($_GET);

// Form Processing
$msg = '';
if( isset($_GET['name']) )
{
    $name = $_GET['name'];

    if( isset($_GET['status']) ) {
        // Since both name AND status have been submitted,
        // This must be an update request (via submit button)
        $status = $_GET['status'];
        
        $result = $dao->updateStatus($name, $status);
        if(!$result) {
            $msg = "Cat $name's status could not be updated to $status";
        }
        else {
            $msg = "Cat $name's status has been updated to $status";
        }
    }
    $cat = $dao->getCatByName($name); // Cat object
}
else {
    $cats = $dao->getCats();
}

?>
<html>
<head>
    <title>Update a cat's status</title>
</head>
<body>

<?php
    echo "<h2>$msg</h2>";
?>

<h1>Update a cat's status</h1>

<form action='update.php' method='GET'>

    <?php
        if( isset($cats) ) {
            // update.php
            echo "
            <table border='1'>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Update Link</th>
                </tr>
            ";

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
                ";

                echo "
                    <td>
                        <a href='update.php?name={$cat->getName()}'>Update</a>
                    </td>
                </tr>
                ";
            }

            echo "
            </table>";
        }
        else {
            // update.php?name=someName
            //var_dump($cat);

            echo "
                <table border='1'>
                    <tr>
                        <td>Name</td>
                        <td> 
                            {$cat->getName()}
                        </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td> {$cat->getAge()} </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td> {$cat->getGender()} </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <input type='text' name='status' value='{$cat->getStatus()}'>
                        </td>
                    </tr>
                </table>

                <input type='hidden' name='name' value='{$cat->getName()}'>
                <input type='submit' value='Submit Update Request'>
            ";
        }
    ?>

</form>

<hr>
Click <a href='update.php'>here</a> to go back to Update's Main Page

</body>
</html>