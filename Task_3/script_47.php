<?php
$sum=array(1,2,3);

function add($num)
{
	return $num+$num;
}

print_r(array_map("add",$sum));

?>