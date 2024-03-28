<?php
$hostname = 'localhost';
$userdb = 'root';
$passdb = '';
$namedb = 'galerifoto';

$koneksi = mysqli_connect($hostname,$userdb,$passdb,$namedb);

if ($koneksi) {
    echo "terhubung";
}else{
    echo "tidak terhubung";
}

?>