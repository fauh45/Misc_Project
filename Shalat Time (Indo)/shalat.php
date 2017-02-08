<?php
$loc = "bandung";
$url = "http://muslimsalat.com/".$loc."/daily.json";
$json = file_get_contents($url);
$json = utf8_decode($json);
$name = array("fajr", "shurooq", "dhuhr", "asr", "maghrib", "isha");
$nama = array("Shubuh", "Terbit Matahari", "Szuhur", "Ashar", "Maghrib", "Isya");
$obj = json_decode($json, true);
$sholat = $obj["items"][0];
$date = date("d-m-Y", strtotime($sholat["date_for"]));

echo "Waktu untuk ".ucfirst(strtolower($loc))." Tanggal ".$date."\n\n";
for ($i=0; $i < count($sholat)-1; $i++) {
	echo $nama[$i]." : ".$sholat[$name[$i]]."\n";
}
?>