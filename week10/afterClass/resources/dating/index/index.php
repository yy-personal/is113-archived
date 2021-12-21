<?php

require_once 'PersonDAO.php';
// By importing this file, we can create a DAO object.
// DAO object allows us to obtain:
//    - $people (Array of Person objects)
//    - a subset of $people where gender is either 'M' or 'F'
$dao = new PersonDAO();
// You can now call all public methods of PersonDAO class.
// var_dump($dao->getPeople());
// var_dump($dao->getPeople());
?>
<html>
<head>
    <title>Dating - Show All Profiles</title>
</head>
<body>
    <h3>Show All Profiles</h3>
    <table border="1">
        <?php
            // YOUR CODE GOES HERE
            // There are multiple Tables within a Table
            
            //===================================================================
            // Display a Table containing "Men" only
            // There are multiple Tables within a Table
            // YOUR CODE GOES HERE
            $get_array_by_men = $dao->getPeopleByGender('M');
            $num_men = count($get_array_by_men);
            $counting = 0;
            echo
            "
            <tr >
                <th colspan = '$num_men'>
                    Men({$num_men})
                </th>
            </tr>
            ";
            foreach($get_array_by_men as $men_obj){
                echo
            "
            <td>
            
                <table border='1'>
                    <tr>
                        <td colspan = '2'><img src='./images/{$men_obj->getImage()}'></td>
                    <tr>
                    <tr>
                        <td>Fullname</td><td>{$men_obj->getFullname()}</td>
                    <tr>
                    <tr>
                        <td>gender</td><td>{$men_obj->getGender()}</td>
                    <tr>
                    <tr>
                        <td>age</td><td>{$men_obj->getAge()}</td>
                    <tr>
                    <tr>
                        <td>height</td><td>{$men_obj->getHeight()}</td>
                    <tr>
                    <tr>
                        <td>weight</td><td>{$men_obj->getWeight()}</td>
                    <tr>
                    
                </table>
            
            </td>
            ";
            }
            
            

            echo '<hr>';
            //===================================================================
            // Display a Table containing "Women" only
            // There are multiple Tables within a Table
            // YOUR CODE GOES HERE
            $get_array_by_female = $dao->getPeopleByGender('F');
            $num_female = count($get_array_by_female);
            $counting = 0;
            echo
            "
            <tr >
                <th colspan = '$num_female'>
                    Women({$num_female})
                </th>
            </tr>
            ";
            foreach($get_array_by_female as $women_obj){
                echo
            "
            <td>
            
                <table border='1'>
                    <tr>
                        <td colspan = '2'><img src='./images/{$women_obj->getImage()}'></td>
                    <tr>
                    <tr>
                        <td>Fullname</td><td>{$men_obj->getFullname()}</td>
                    <tr>
                    <tr>
                        <td>gender</td><td>{$women_obj->getGender()}</td>
                    <tr>
                    <tr>
                        <td>age</td><td>{$women_obj->getAge()}</td>
                    <tr>
                    <tr>
                        <td>height</td><td>{$women_obj->getHeight()}</td>
                    <tr>
                    <tr>
                        <td>weight</td><td>{$women_obj->getWeight()}</td>
                    <tr>
                    
                </table>
            
            </td>
            ";
            }
        ?>
    </table>

</body>
</html>