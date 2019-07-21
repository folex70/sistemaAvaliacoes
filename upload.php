<?php

if($_FILES["file"]["name"] != '')
{
	$test = explode (".", $_FILES["file"]["name"]);
	$extension = end($test);
	$name = rand(100,999). '.'.$extension;
	$location = './upload/upload'.$name;
	move_uploaded_file($_FILES["file"]["tmp_name"], $location);
	$_POST['aaa'] = $_FILES["file"]["tmp_name"];
	echo '<img src= "'.$location.'" height="150" width="225" class="img-thumbnail" />';
	echo '<input type="hidden" name="imageupload_name" id="imageupload_name" value="'.$location.'" ></input>';
}
	
?>