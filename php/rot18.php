<?php

function str_rot128($str){
    return strtr($str, 
    '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~', 
    'PQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNO'
  );
}


function rot128($string)
{
  $new_str = str_rot128($string);
  return $new_str;

}

function rot128_d($string)
{
  $new_str = str_rot128($string);
  $new_str = str_rot128($new_str);
  return $new_str;
}
?>