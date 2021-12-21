<html><body><ol>
<?php
if (isset($_POST['fruit'])) {
foreach ($_POST['fruit'] as $item) {
echo "<li>$item</li>";
}
} else {
echo "<li>nothing</li>";
}
?>
</ol></body></html>