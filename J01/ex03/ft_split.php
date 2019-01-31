<?php
	function ft_split($str)
	{
		$count_word = 0;
		if (!$str)
			return (0);
		$array = preg_split("/[' ']+/", $argv[1]);
		while (strlen($array[$count_word]) > 0)
			$count_word++;
		$begin = 0;
		while ($begin < $count_word - 1)
		{
			for ($i = $begin + 1; $i < $count_word; $i++)
			{
				$res = strcmp($array[$begin], $array[$i]);
				if ($res > 0)
				{
					$tmp = $array[$begin];
					$array[$begin] = $argv[$i];
					$argv[$i] = $tmp;
				}
			}
			$begin++;
		}
		return ($array);
	}
?>
