<?php

require_once 'common.php';

// YOUR CODE GOES HERE
// PostDAO object?

?>
<html>
<body>

    <?php

        echo "<h1>My Blog Posts</h1>";

        echo "
            <table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Create Timestamp</th>
                    <th>Last Update Timestamp</th>
                    <th>Subject</th>
                    <th>Edit Link</th>
                    <th>Delete Link</th>
                </tr>
        ";


        

        echo "
            </table>
        ";
    ?>

    <a href='add.html'><h3>Add a New Blog Post</h3></a>

</body>
</html>