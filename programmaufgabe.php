#!/usr/bin/php

<?php


for($i = 1; $i < 200; $i++) {



// commit -a
	$flag=false;
    if($i % 2 == 0)
	{
		echo "zwei\n";
		$flag=true;
	}

	if($i % 5 == 0)
	{
		echo "fuenf\n";
		$flag=true;
	}

	if(!$flag){
		echo "$i\n";
	}

	if($i % 7 == 0)
	{
		echo "sieben\n";
		$flag=true;	
	}

        if($i % 2 == 0 && $i % 5 == 0)
        {
                echo "zweifuenf\n";
                $flag=true;
        }

        if($i % 2 == 0 && $i % 7 == 0)
        {
                echo "zweisieben\n";
                $flag=true;
        }

        if($i % 5 == 0 && $i % 7 == 0)
        {
                echo "fuenfsieben\n";
                $flag=true;
        }

        if($i % 2 == 0 && $i % 5 == 0 && $i % 7 == 0)
        {
                echo "zweifuenfsieben\n";
                $flag=true;

        }



/*
	switch ($i  % 2 == 0) {
    		case 2:
        	echo "zwei\n";
       		break;
  	  case 5:
      		echo "fünf\n";
      		break;
    	  case 7:
     		echo "sieben";
        	break;
	}
*/
}

?>

