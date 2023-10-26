<?php
$student=array(array("fisrt_name"=>"janshi","last_name"=>"patel"),
			   array("fisrt_name"=>"himani","last_name"=>"trivedi"),
		    	array("fisrt_name"=>"disha","last_name"=>"shiyani"),
				array("fisrt_name"=>"hetali","last_name"=>"jadav"));
$First_name_of_students=array_column($student,'fisrt_name');
print_r($First_name_of_students);
?>