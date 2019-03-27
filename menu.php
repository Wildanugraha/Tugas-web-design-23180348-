<?php
	$menu=array(
				"Bawah"=>array("Nasi Telor","Nasi Ayam","Nasi Sarden","Nasi Sayur","Nasi Tempe"),
				"Menengah"=>array("Nasi Goreng Ayam","Nasi Goreng Bakso","Nasi Goreng Sosis","Nasi Goreng Hati","Nasi Goreng Sapi"),
				"Atas"=>array("Roti Keju","Roti Coklat","Roti Kacang","Roti Susu","Roti Kelapa"),
				"Spesial"=>array("Mie Ayam","Mie Bakso","Mie Sosis","Mie Goreng","Mie Sapi"),
				"Minum"=>array("Es Teh","Es Jeruk","Es Campur","Jus Jambu","Jus Naga"),

	);

	echo "Saya memesan";
	echo ($menu ["Menengah"] [3]);
	echo "<br/>";
	echo "dengan minuman";
	echo ($menu ["Minum"] [4]);

?>