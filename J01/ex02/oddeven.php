#!/usr/bin/php

<?php
	function oddeven($nbr)
	{
		if (is_numeric($nbr) == TRUE && $nbr % 2 == 0)
			echo "Le chiffre $nbr est Pair\n";
		elseif (is_numeric($nbr) == TRUE && $nbr % 2 == 1)
			echo "Le chiffre $nbr est Impair\n";
		else
			echo "'$nbr' n'est pas un chiffre\n";
	}
	while (1)
	{
		echo 'Entrez un nombre: ';
		$nbr = trim(fgets(STDIN));
		if (feof(STDIN) == TRUE)
		{
			echo '^D';
			exit();
		}
		oddeven($nbr);
		if ($nbr == EOF)
			exit(0);
	}
?>
