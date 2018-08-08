<?php
use yii\helpers\Html;
 
Header('Content-type: text/xml');
//koneksi ke database
//$connection = mysqli_connect("localhost", "root", "", "db_belajar") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table tb_anggota
$sql = "select * from vehicle";
// $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
 
//membuat array
while ($row = mysqli_fetch_assoc($model)) {
 
    $track = $xml->addChild('vehicle');
    $track->addChild('licence_plat', $row['licence_plat']);
    $track->addChild('vehicle_type', $row['vehicle_type']);
    $track->addChild('vehicle_status', $row['vehicle_status']);
    $track->addChild('partner', $row['partner']);
}
 
print($xml->asXML());
//tutup kone