<?php

class Calculator {
	public function add($string){
		$string = explode(",",str_replace(array(";;",":","*",";",".","%"),",",$string));
		if (count($string) == 4) throw new Exception("Error Process", 1);
		foreach($string as $val) if($val<0) throw new Exception("Negative are not allowed");
		return array_sum($string);		
	}
}