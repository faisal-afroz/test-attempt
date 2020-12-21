<?php



		$arr_test= [1,0,0,0,1,1,1,0,0,0,1,1,1,1];
		$curr = 0;
		$max= 0;
		$prev=0;
		foreach ($arr_test as $key => $value)
		 {
		 	if($key==0 && $value==1)
		 	{
		 		$curr++;
		 	}

			else if($value==1 && $prev==1)
			{
				$curr++;

			}
			else if($value==1 && $prev==0)
			{
				$curr=1;

			}
			else
			{
				$curr=0;
			}
			if($curr>$max)
			{
				$max= $curr;
			}
				
			$prev = $value;
		 }
		
		echo "Max consecutive occurence ". $max;	
			
		

?>