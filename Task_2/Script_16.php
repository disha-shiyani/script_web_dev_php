<?php
  
    $vowelcount = 0;  
      
    $str = "My name is disha";  
          
    //Converting entire string to lower case to reduce the comparisons  
    $str = strtolower($str);  
    for($i = 0; $i < strlen($str); $i++)
     {  
	    //Checks whether a character is a vowel  
	    if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') 
		    {  
		        //Increments the vowel counter  
		        $vowelcount++;  
	    	}  
     }
    echo "Number of vowels : " , $vowelcount;  
    echo "<br>";
?>