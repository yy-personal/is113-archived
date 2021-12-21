<?php

// list of valid categories;  more categories may be added in the future!
$categories = [ 'love', 'life', 'friend'];

// 1. initialize variables
$quote = '';

// 2.  process


// 3. display
?>
<html>
<body>
    <form method="post">
        Category: 
        <?php
            foreach ($categories as $item) {
                echo "
                    <input type='radio' name='category' id='category_'$item' value='$item' />
                    <label for='category_'$item'> $item </label>
                ";
            }
        ?>
        <input type='submit' value='Get quote' />
    </form>

    <h1> <?=$quote ?> </h1>
</body>
</html>