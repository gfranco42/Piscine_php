#!/usr/bin/php

<?php
	if ($argc != 2)
		exit(0);
	$i = 0;
	$array = preg_split("/[' ']+/", $argv[1]);
	$str = implode(" ", $array);
	$str = trim($str, " ");
	echo "$str\n";
?>
