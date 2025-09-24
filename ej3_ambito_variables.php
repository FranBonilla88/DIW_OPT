<?php

$a = 2;
{
	$a = 5;
	$b = 'Hola';
}
echo $a, $b;

print_r(get_defined_vars());
