<?php  
function replaceText($text1,$text2){
	$text = $text1;
	$text1 = str_split($text1);
	foreach($text1 as $row){
		if(preg_match('/^[aiueo]/',$row[0]) )
			{	
				$text = $row[0];
				$replace = str_replace($text, '', $text2);
				echo $replace;
			}
		else{
				echo $row[0];
		}
	}if(preg_match('/^[aiueo]/',$text) == ''){
		echo "Tidak ada huruf fokal";	
	}
}

replaceText('Orang jahat adalah orang baik yang tersakiti',"i");

?>