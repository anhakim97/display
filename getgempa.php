<?php
$xml = simplexml_load_file("http://data.bmkg.go.id/lastgempadirasakan.xml");
foreach($xml as $data){ 
$date   = $data->Tanggal;
$krr    = explode('/', $date);
$result = implode("", $krr);
$tahun = substr($result, 4,4);
$tgl = substr($result, 0,2);
$bulan = substr($result, 2,2);
$jam   = $data->Jam;
$krr1    = explode(':', $jam);
$result1 = implode("", $krr1);
$j = substr($result1, 0,2);
$m = substr($result1, 2,2);
$d = substr($result1, 4,2);
$datetime = $tahun.$bulan.$tgl.$j.$m.$d;
$url = "http://inatews.bmkg.go.id/light/xml/".$datetime.".mmi.jpg";

	?>

<!-- <strong style="font-size: 150%">Info Gempa dirasakan (Terkini)</strong> <br> -->
<?=$data->Tanggal;?> - <?=$data->Jam;?> <br>
<strong style="font-size: 120%">Mag:<?=$data->Magnitude;?> Kedalaman : <?=$data->Kedalaman;?></strong><br>
<?=$data->Keterangan?><br>
<img src="<?=$url?>" style="width: 100%;">
<?php


} ?>
