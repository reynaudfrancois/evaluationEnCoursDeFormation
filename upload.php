<?php

	$dir = 'images/';
	$nameFile = $_FILES['fileImg']['name'];
	$tmpFile = $_FILES['fileImg']['tmp_name'];
	$typeFile = explode(".", $nameFile)[1];

	$correct = array('png', 'jpg', 'gif');

	if (in_array($typeFile, $correct)) {
		if (move_uploaded_file($tmpFile, $dir . $nameFile)) {
			echo 'Uploaded !';}
	} else {
		echo 'error';
	}