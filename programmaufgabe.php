#!/usr/bin/php

<?php


for($i = 1; $i <= 200; $i++) {

	$j = $i;
    if( ($i % 2) == 0)
	{
		$j = "zwei\n";
		$flag=true;
	}

	if( ($i % 5) == 0)
	{
		$j = "fuenf\n";
		$flag=true;
	}

	if( ($i % 7) == 0)
	{
		$j = "sieben\n";
		$flag=true;	
	}

        if( ($i %(2*5))  == 0)
        {
                $j = "zweifuenf\n";
                $flag=true;
        }

        if( ($i %(2*7))  == 0)
        {
                $j = "zweisieben\n";
                $flag=true;
        }

        if( ($i %(2*5*7))  == 0)
        {
                $j = "zweifuenfsieben\n";
                $flag=true;
        }



	echo "$j\n";
}

?>

