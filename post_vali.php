<?php

echo $_REQUEST['name'].'<br>';
echo $_REQUEST['address'].'<br>';
echo $_REQUEST['city'].'<br>';
echo $_REQUEST['gender'].'<br>';

echo implode(',',$_REQUEST['hobby']);


?>