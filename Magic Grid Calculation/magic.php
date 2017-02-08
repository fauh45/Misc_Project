<?php
/*
Grid persegi
by Fauh45
*/
$jumlah = 0; //Menyimpan Jumlah yang dihasilkan oleh loop
$n = 4; //Untuk blok 4x4
for($i=0;$i<=$n;$i++) {
	$jumlah += $i*$i;
}
echo $jumlah;
?>