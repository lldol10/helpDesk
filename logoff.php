<?php
session_start();
/*

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


unset($_SESSION['x']);

session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

session_destroy();

session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
*/

session_destroy();
header('Location: index.php');

?>