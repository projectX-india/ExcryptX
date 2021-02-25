<?php

	
/*
	function morse($mes1)
	{

		$normal = [ ' ', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
	$morse = ["    ", ". _", "_ . . .", "_ . _ .", "_ . .", ".", ". . _ .", "_ _ .", ". . . .", ". .", ". _ _ _", "_ . _", ". _ . .",  "_ _", "_ .", "_ _ _", ". _ _ .", "_ _ . _", ". _ .", ". . .", "_", ". . _", ". . . _", ". _ _", "_ . . _", "_ . _ _", "_ _ . .", ". _ _ _ _", ". . _ _ _", ". . . _ _", ". . . . _", ". . . . .", "_ . . . .", "_ _ . . .", "_ _ _ . .", "_ _ _ _ .", "_ _ _ _ _"];

	$new_mess="";
	$space = " ";

		$size = strlen($mes1);

		for($i=0;$i<$size;$i++)
		{
			for($j=0;$j<37;$j++)
			{
				if($mes1[$i]==$normal[$j])
				{
					$new_mess = $new_mess.$morse[$j];
					$new_mess = $new_mess.$space;
					
					break;
				}
			}
		}

		return $new_mess;
	}

	function morse_d($mes2)
	{
		$normal = [ ' ', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
	$morse = ["    ", ". _", "_ . . .", "_ . _ .", "_ . .", ".", ". . _ .", "_ _ .", ". . . .", ". .", ". _ _ _", "_ . _", ". _ . .",  "_ _", "_ .", "_ _ _", ". _ _ .", "_ _ . _", ". _ .", ". . .", "_", ". . _", ". . . _", ". _ _", "_ . . _", "_ . _ _", "_ _ . .", ". _ _ _ _", ". . _ _ _", ". . . _ _", ". . . . _", ". . . . .", "_ . . . .", "_ _ . . .", "_ _ _ . .", "_ _ _ _ .", "_ _ _ _ _"];

	$new_mess2="";
	$new_str="";
	$new="";
	for($i=0;$i<(strlen($mes2));$i=$i+2)
	{
		$j=0;

		$new=$mes2[$i].$mes2[$i+1];
		$new_str[$j]=$new;
		$j++;
	}

	for($i=0;$i<strlen($new_str);$i++)
		{
			for($j=0;$j<37;$j++)
			{
				if($new_str[$i]==$morse[$j])
				{
					$new_mess2 = $new_mess2.$normal[$j];
					
					
					break;
				}
			}
		}

		return $new_str;
}

*/
$lettertomorse=array(
     "a" => ".-",
     "b" => "-...",
     "c" => "-.-.",
     "d" => "-..",
     "e" => ".",
     "f" => "..-.",
     "g" => "--.",
     "h" => "....",
     "i" => "..",
     "j" => ".---",
     "k" => ".-.",
     "l" => ".-..",
     "m" => "--",
     "n" => "-.",
     "o" => "---",
     "p" => ".--.",
     "q" => "--.-",
     "r" => ".-.",
     "s" => "...",
     "t" => "-",
     "u" => "..-",
     "v" => "...-",
     "w" => ".--",
     "x" => "-..-",
     "y" => "-.--",
     "z" => "--..",
     "1" => ".----",
     "2" => "..---",
     "3" => "...--",
     "4" => "....-",
     "5" => ".....",
     "6" => "-....",
     "7" => "--...",
     "8" => "---..",
     "9" => "----.",
     "0" => "-----",
     " " => "   ",
     "." => ".-.-.-",
     "," => "--..--",
     "EOM" => ".-.-."
     );
 
 $morsetoletter=array();
 reset($lettertomorse);
 foreach($lettertomorse as $letter => $code) 
 {
     $morsetoletter[$code]=$letter;
 }
 
 function morse($txt) 
 {
     global $lettertomorse;
 
     $line="";
     for ($i=0;$i<strlen($txt);$i++) 
     {
         $letter=substr($txt,$i,1);
 
         if (empty($lettertomorse[$letter])) 
             continue;
 
         $line.=$lettertomorse[$letter]." ";
     }
     return $line;
 }
 
 function morse_d($string) 
 {
     global $morsetoletter;
 
     $line="";
     $letters=array();
     $letters=explode(" ",$string);
     foreach ($letters as $letter) 
     {
         if (empty($letter)) 
             $line.=" ";
         if (empty($morsetoletter[$letter])) 
             continue;
 
         $line.=$morsetoletter[$letter];
     }
     return $line;
 }

?>
