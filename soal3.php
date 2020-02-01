<?php

function cekString($text){
	$karakter = preg_match('/[A-Za-z]/', $text);
	$karakter_asli = explode(" ", $text);
	$karakter_asli = count($karakter_asli);
	if($karakter){
		$karakter = str_word_count($text);
		return $karakter."/".$karakter_asli;
	}else{
		echo "Parameter harus string";
	}
	
}

echo cekString(1);
?>