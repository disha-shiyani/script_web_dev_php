<?php
function add($num1,$num2)
{
	return $num1+$num2;
}
$result=array(10,20,30);
print_r(array_reduce($result,"add"));
?>