<?php

require_once 'CatDAO.php';
$dao = new CatDAO();
$cats = $dao->getCats();

?>
<html>
<body>

    <h1>Our Cats</h1>

    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Status</th>
        </tr>

        <?php
            foreach($cats as $cat) {
                // YOUR CODE GOES HERE
            }
        ?>

    </table>

</body>
</html>