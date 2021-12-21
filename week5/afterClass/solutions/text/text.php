<?php
// initialize
$css = '';

// process
$msg = trim($_POST['msg']);

if ( strlen($msg) == 0 ) {
    $msg = 'Message cannot be empty';

} else {

    if ( isset($_POST['styles']) ) {
        $styles = $_POST['styles'];

        foreach( $styles as $style) {
            if ( $style == 'italic') {
                $css .= 'font-style: italic;';
            } elseif ( $style == 'bold') {
                $css .= 'font-weight: bold;';
            }        
        }
    }

    $css .= "color:" . $_POST['color'] . ";";

    if ( isset($_POST['bgcolor']) ) {
        $css .= "background-color: " . $_POST['bgcolor'] . ";";
    }
}

// display
?>

<html>
<body style='<?=$css?>' >
    
<?=$msg?>

</body>
</html>