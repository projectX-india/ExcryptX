<?php

	function base64($string)
	{
		$base64_string = base64_encode($string);
		return $base64_string;
	}

	function base64_d($string)
	{
		$base64_string_decoded = base64_decode($string);
		return $base64_string_decoded;
	}

?>