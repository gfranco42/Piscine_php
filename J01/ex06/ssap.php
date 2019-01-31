#!/usr/bin/php
<?php
	$count_word = count($argv);
	if ($count_word == 0)
		exit(0);
	$array = $argv;
	$begin = 0;
	while ($begin < $count_word - 1)
	{
		for ($i = $begin + 1; $i < $count_word; $i++)
		{
			$res = strcmp($array[$begin], $array[$i]);
			if ($res > 0)
			{
				$tmp = $array[$begin];
				$array[$begin] = $array[$i];
				$array[$i] = $tmp;
			}
		}
		$begin++;
	}
	for ($i = 2; $i < $count_word; $i++)
	{
		echo "$array[$i]\n";
	}
?>
