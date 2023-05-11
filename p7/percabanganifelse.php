<?php 
	$nilai = 40;
	if ($nilai <= 0) {
		echo "Nilai Anda : $nilai. Nilai tidak bisa diproses";
	}
	elseif ($nilai >= 60) {
		echo "Nilai Anda : $nilai. Selamat, Anda Telah Lulus!!";
	}
	else
	{
		echo "Nilai Anda : $nilai. Sorry, Anda Tidak Lulus!!";
	}
?>