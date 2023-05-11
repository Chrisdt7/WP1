<?php 
$a=10;
$b=3;

$tambah=$a + $b;
echo"$a + $b = $tambah<br>";
$kurang=$a - $b;
echo"$a - $b = $kurang<br>";
$kali=$a * $b;
echo"$a * $b = $kali<br>";
$bagi=$a / $b;
echo"$a / $b = $bagi<br>";
$sisa=$a % $b;
echo"$a % $b = $bagi<br>";
$pangkat=pow($a, $b);
echo"$a ^ $b = $pangkat<br>";

//increment
$a++;
echo "a++ = $a++ <br>";
$b--;
echo "b-- = $b-- <hr>";

//perbandingan

$samadengan = $a == $b;
$tdksamadengan = $a != $b;
$lbhdarisamadengan = $a >= $b;
$lbhdari = $a > $b;
$krgdarisamadengan = $a <= $b;
$krgdari = $a < $b;
$negasisamadengan = !($samadengan);

echo "
	$a == $b = $samadengan <br>
	$a != $b = $tdksamadengan <br>
	$a >= $b = $lbhdarisamadengan <br>
	$a > $b = $lbhdari <br>
	$a <= $b = $krgdarisamadengan <br>
	$a < $b = $krgdari <br>
	!($a == $b) = $negasisamadengan <br>
";

?>