<?php
	 function date_german($datum) {
    $d    =    explode("-",$datum);
    
    return    sprintf("%02d.%02d.%04d", $d[2], $d[1], $d[0]);
}

	function date_int($datum){
		$a=explode(".",$datum);
		return sprintf("%04d-%02d-%02d", $a[2], $a[1], $a[0]);
	}
?>