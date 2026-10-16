
<?php
require_once '../Catatan.php';

$c = new Catatan();
$hasil = $c->setJudul("Ketiga")
           ->setIsi("Belajar untuk memahami diri sendiri")
           ->save();

echo $hasil ? "Berhasil disimpan" : "Gagal";
