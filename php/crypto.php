<?php

	include "morse.php";
	include "rot13.php";
	include "rot18.php";
	include "base32.php";
	include "base64.php";
	
	function encrypt($key, $message1 , $option1)
	{
		$new_string = "";
		if($option1 == 1)
		{
			$new_lower = strtolower($message1);
			$new_string = morse($new_lower);
			
		}
		else if ($option1 == 2) {
			
			$new_string = rot13($message1);
		} 

		else if ($option1 == 3)
		{
			$new_string = rot128($message1);

		} 
		else if($option1 == 4)

		{

			$new_string = base32($message1);
			$new_upper = strtoupper($new_string);
			$equal = "=";
			$new_string = $new_upper.$equal;

		}
		else if($option1 == 5)
		{

			
			$new_string = base64($message1);
		}
		
		
		return $new_string;

	}




	function decrypt($message1 , $option1)
	{
		$new_string = "";
		if($option1 == 1)
		{
			$new_lower = strtolower($message1);
			$new_string = morse_d($new_lower);
			
		}
		else if ($option1 == 2) {
			
			$new_string = rot13_d($message1);
		} 

		else if ($option1 == 3)
		{
			$new_string = rot128_d($message1);

		} 
		else if($option1 == 4)

		{

			$new_string = base32_d($message1);
			$new_upper = strtoupper($new_string);
			$equal = "=";
			$new_string = $new_upper.$equal;

		}
		else if($option1 == 5)
		{

			$new_string = base64_d($message1);
		}
		
		
		return $new_string;

	}
?>