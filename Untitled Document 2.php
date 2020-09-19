<?php
$sum = 0;

	/*memeriksa inputan*/
	$n = 153;
	
	$temp = $n; /*menyimpan nomor asli*/
	$totalDigits = strlen($n); /*Jumlah total digit yang terdiri dari $ n*/
	
	while($n != 0) {
		$r = $n%10; /*Extract digit terakhir*/
		$sum = $sum+pow($r, $totalDigits);
		$n = floor($n/10); /*Kurangi angka dengan satu digit*/
	}
	
	if($sum == $temp) {
		echo "true";
	} else {
		echo "false";
	}
