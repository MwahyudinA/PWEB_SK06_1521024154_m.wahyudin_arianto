<!DOCTYPE html>
<html>
<head>
	<title>SK-6_2 M.Wahyudin Arianto</title>
</head>
<body>
	<?php 
	$p = 154; 
	$l = 24;
	$t = 210;
	
	Function Luas (){
		global $p, $l;
		$luaspersegi = $p * $l;
		echo "1. Luas Persegi = ";
		echo $luaspersegi;
		echo "<br><br>";
		}
	function Keliling (){
		global $p, $l;
		$kelilingpersegi = $p + $p + $l + $l;
		echo "2. Keliling Persegi = ";
		echo $kelilingpersegi;
		echo "<br><br>";
		}
	function Volume (){
		global $p, $l, $t;
		$volumebalok = $p * $l * $t;
		echo "3. Volume Balok = ";
		echo $volumebalok;
	}
	Luas();
	Keliling();
	Volume ();
	?>
</body>
</html>