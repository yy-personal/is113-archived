<?php

require_once 'WiseMan.php';

$categories = array_keys( WiseMan::QUOTES );

// 1. initialize variables
$category = $categories[0];
$quote = '';
$msg = '';
$bookmark_check = '';

// 2. process

if ( isset($_POST['quote']) && isset($_POST['feeling']) ) { 
    // process like/haha form

    $category = $_POST['category']; // to re-populate the radio buttons
    $quote = $_POST['quote'];

    $feeling = $_POST['feeling'];
    if ( $feeling == 'Like' ) {
        $msg = 'You like it!';
    } else {
        $msg = 'You find it funny.';
    }

    if ( isset( $_POST['bookmark']) ) {
        $msg .= ' Bookmarked!';
    }

} elseif ( isset($_POST['category']) ) {
    // process get quote form
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

        <?php
            if ( $quote != '' ) {
        ?>

            <h1> <?=$quote ?> </h1>
                <!-- 
                    Use a hidden field to remember the random quote
                    https://www.w3schools.com/tags/att_input_type_hidden.asp 
                    
                    Optional: http://php.net/manual/en/function.htmlentities.php
                        In case, the random quote contains single-quotation mark '.
                -->
                <input type='hidden' name='quote' value='<?=htmlentities( $quote, ENT_QUOTES )?>' />

                <input type='submit' name='feeling' value='Like'>
                <input type='submit' name='feeling' value='Haha'>
                <input type='checkbox' name='bookmark' id='bookmark' />
                <label for='bookmark'>Bookmark</label>
            
            <p> <?=$msg ?> </p>

        <?php
            } // end-if
        ?>
    </form>
	
</body>
</html>