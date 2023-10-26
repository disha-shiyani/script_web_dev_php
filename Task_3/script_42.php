<?php
$color1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$color2=array("r"=>"red","g"=>"green");

$different=array_diff($color1,$color2);
print_r($different);
?>