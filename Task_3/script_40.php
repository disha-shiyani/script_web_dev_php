<?php
$fruits=array("a"=>"apple","b"=>"banana","o"=>"orange");
$dry_fruits=array("a"=>"peants","o"=>"almond");
array_splice($fruits,1,1,$dry_fruits);
print_r($fruits);
?>
