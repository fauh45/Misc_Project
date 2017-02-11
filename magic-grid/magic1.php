<?php
/*
Grid persegi panjang
by Fauh45
*/
$n = 4; //Untuk blok 4x4
$bil_kdr = 0; //Menyimpan Jumlah yang dihasilkan oleh loop
$jumlah_p = 0; //Init
for($i=0;$i<=$n;$i++) {
	$bil_kdr += $i;
}
for($i=0;$i<=$n;$i++) {
	$jumlah_p += $i*$i;
}
$jumlah_pp_p = $bil_kdr*$bil_kdr;
echo $jumlah_pp_p-$jumlah_p;
?>