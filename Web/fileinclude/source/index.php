<?php
error_reporting(0);
if ($_GET['file']) {
	if(strstr($_GET['file'],'../'))
		die('���ɶ');
   include $_GET['file'];
} else {
   include 'upload.php';
}
?>