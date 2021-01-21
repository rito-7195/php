<?php
	$n = 9;
	
	cetakPyramid($n);
	
	function cetakPyramid($n){
		$mid = round($n / 2); //nilai tengah

		//perulangan untuk mencetak baris
		for ($i=1; $i <= $n; $i++) { 
			//perulangan untuk baris pertama sampai tengah
			if ($i <= $mid) {
				//perulangan untuk indentasi
				for ($j=1; $j < ($i*2); $j++) { 
					echo "&nbsp";
				}

				if ($i != $mid) {
					echo $i;
				} else {
					echo " ".$i;
				}
				
				//perulangan untuk mencetak spasi
				$space = (($mid-1)-$i) + ($mid-$i) + 1;
				for ($j=0; $j < ($space*2); $j++) { 
					echo "&nbsp";
				}

				if ($i != $mid) {
					echo $i . "<br>";
				} else {
					echo "<br>";
				}
			//perulangan untuk baris setelah tengah sampai akhir
			} else {
				//perulangan untuk indentasi
				for ($j=(($n*2)-$i); $j > ($i-1); $j--) { 
					echo "&nbsp";
				}

				echo (($n-$i) + 1);

				//perulangan untuk mencetak spasi
				$space = (($i-1)-$mid) + ($i-$mid) + 1;
				for ($j=0; $j < ($space*2); $j++) { 
					echo "&nbsp";
				}

				echo (($n-$i) + 1) . "<br>";

			}
		}
	}
?>