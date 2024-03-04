<?php

$name=$_FILES['fileup']['name'];

if($_FILES['fileup']['type']=="image/png")
{
	$path="../upload/".$name;

	move_uploaded_file($_FILES['fileup']['tmp_name'],$path);
}
else
{
	echo 'Please Select PNG File!.....';
}
?>