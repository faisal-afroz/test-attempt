<?php

		$test_value=4;

		$arr_test= [1,90,11,40,1,3 ,3,2,2,4,0];
		$arr_repeat= array();
		$sum = 0;
		foreach ($arr_test as $key => $value)
		 {
			
				
			
			foreach ($arr_test as $next=>$repeated )
			{

				if($key != $next)
				{
				 

				
				if($value+$repeated== $test_value) 
				{
				  echo  $value .','. $repeated ;
				  echo '<br>';
				}




				}

			}
	
		}
		

?>