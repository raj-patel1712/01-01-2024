<?php
//echo '<pre>';
//print_r($_SERVER);

//echo $_SERVER['REMOTE_ADDR'];

//echo $_SERVER['REMOTE_ADDR'];
//echo $_SERVER['PHP_SELF'];


$page=explode('/',$_SERVER['PHP_SELF']);

//print_r($page);

echo $page[2];

//echo '<pre>';

//print_r($_SERVER);
?>