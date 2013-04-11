<?php
$counter = 0;
for ($i=0; $i < 1000; $i++) { 
	if ($i%3==0 && $i%7==0) :
		print($counter.' -> '.$i.'<br>');
		$counter++;
	endif;
}
?>