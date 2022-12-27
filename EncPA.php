<?php
$GLOBALS['iv']='';
define('AES_256_CBC', 'aes-256-cbc');
function Cipher($ch, $key)
{
 if (!ctype_alpha($ch))
      return $ch;
      $offset = ord(ctype_upper($ch) ? 'A' : 'a');
      return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}

function Encipher($input)
{       $output = "";
       $key = mt_rand(1, 10);
       
	$inputArr = str_split($input);
	foreach ($inputArr as $ch)
        {
	$output .= Cipher($ch, $key);
        }
        //$output=Encipher_2($input);
	return $output;
}

function DEC_Encipher($input,$key)
{
         $output = "";
         $inputArr = str_split($input);
	 foreach ($inputArr as $ch)
	 $output .= Cipher($ch, $key);
         return $output;
}
function Decipher($input)
{
      $key = mt_rand(1, 10);
        return DEC_Encipher($input, 26 - $key);
}
function Decipher_2($input,$iv)
{
$key = 2;
$iv = "1234567812345678";
$decrypted = openssl_decrypt($input, AES_256_CBC, $key, 0, $iv);
 return $decrypted;
}
function Encipher_2($input){
 $key = 2;
$iv = "1234567812345678";
 $GLOBALS['iv']=$iv;
$encrypted = openssl_encrypt($input, AES_256_CBC, $key, 0, $iv);
return $encrypted ;
}