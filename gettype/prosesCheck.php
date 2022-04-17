<?php
	$_nama=trim($_POST['nama']);
	if(strlen($_nama) <= 20)
		if(ctype_alpha(str_replace(' ', '', $_nama))) 
			echo "Nama : ".$_nama."<br>";
		else
			echo " Nama harus berupa abjad <br>";
	else
		echo "Panjang nama maks 20 karakter <br>";
	$_usia=$_POST['usia'];
	if (is_numeric($_usia))
		echo "Usia : " . $_usia . "<br>";
	else
		echo "Usia harus diisi dengan angka";
?>