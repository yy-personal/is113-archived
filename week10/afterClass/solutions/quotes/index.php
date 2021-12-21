<?php


require_once 'WiseMan.php';

// list of valid categories;  more categories may be added in the future!
$categories = [ 'love', 'life', 'friend'];

// 1. initialize variables
$category = $categories[0];
$quote = '';

// 2. process
if ( isset($_POST['category']) ) {
    $category = $_POST['category'];

    $wiseman = new WiseMan($category);
    $quote = $wiseman->getQuote();
}

// 3. display
?>
<html>
<body>
    <form method="post">
        Category: 
        <?php
            foreach ($categories as $item) {
                $checked = '';
                if ( $item == $category ) {
                    $checked = 'checked';
                }
                echo "
                    <input type='radio' name='category' id='category_$item' value='$item' $checked />
                    <label for='category_$item'> $item </label>
                ";
            }
        ?>
        <input type='submit' value='Get quote' />
    </form>

    <h1> <?=$quote ?> </h1>
</body>
</html>