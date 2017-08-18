<?php  
	class LibHelper extends AppHelper{
		function randomNumber($option=10){
			$int = rand(0, 51);
			$a_z = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$rand_letter .= $a_z[$int1];
			return $rand_letter
		}
	}
?>