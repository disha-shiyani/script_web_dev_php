<?php
function odd($num)
{
	return $num&1;
}
$value=array(6,5,4,3,2,1);
print_r(array_filter($value,"odd"));
?>