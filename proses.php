<?php
require_once 'binatang.php';

$binatang= new binatang('Sapi',4,'rumput');
echo 'Nama binatang...'.$binatang->get_nama(). '<br>';
echo 'Berkaki...'.$binatang->get_jumlahkaki(). '<br>';
echo 'Makanan...'.$binatang->get_makanan(). '<br>';
?>