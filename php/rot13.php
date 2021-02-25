<?php

	function rot13($string)
	{
		$encoded = str_rot13($string);
		return $encoded;
	}

	function rot13_d($string)
	{
		$decoded = str_rot13(str_rot13($string));
		return $decoded;
	}

?>
