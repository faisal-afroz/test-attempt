<?php

		$arr_test= [1,90,11,40,1,3 ,3 ];
		$arr_repeat= array();
		$sum = 0;
		foreach ($arr_test as $key => $value) {
			
			
			foreach ($arr_repeat as $repeated )
			{
				if($repeated == $value)
				{
					echo $value . ' is repeating';
					echo "<br>";
				}

			}
			$arr_repeat[]= $value;
		}
		

?>