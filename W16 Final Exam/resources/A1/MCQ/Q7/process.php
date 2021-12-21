<?php
var_dump($_POST);
if (isset($_POST['name'])) {
echo "true,";
} else {
echo "false,";
} if (empty($_POST['name'])) {
echo "true,";
} else {
echo "false,";
} if (isset($_POST['school'])) {
echo "true,";
} else {
echo "false,";
} if (empty($_POST['school'])) {
echo "true,";
} else {
echo "false,";
}
?>