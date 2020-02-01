<?php  
function randomText($text){
	if($text == ""){
		echo 'Parameter harus diisi string';
	}if(!is_string($text)){
		echo "parameter harus string";
	}
	else{
		$karakter = $text;
		$string = str_split($text);
		$random = '';
		for($i = 1 ; $i<=count($string); $i++){
			$z = rand(0, strlen($karakter)-1);
			$random.=$karakter{$z};
		}
			return $random;
	}
		
}

echo randomText('RIzky');
?>