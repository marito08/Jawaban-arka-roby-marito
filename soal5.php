<?php  
function persegi($t){
	for($x=1;$x<=$t;$x++){
		for($i=1;$i<=$t;$i++){
			if($i==1){
				echo "*";
			}else if($x==1){
				echo "*";
			}else if($x==$t){
				echo "*";
			}else if($i==$t){
				echo "*";
			}else{
				echo " &nbsp ";
			}
		}
			echo "<br>";
	}
}

persegi(2);
?>