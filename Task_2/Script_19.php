<?php
$num=37;
$count=0;
for($i=1; $i<=$num; $i++)
{
  if(($num % $i)==0)
  {
  $count++;
  }
}
if($count<3)
{
  echo "$num is a prime number";
}
else{
  echo "$num is not a prime number";
}
?>