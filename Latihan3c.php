<?php
function pangkat($angka, $pangkat) {
    return pow($angka, $pangkat);
}

// Contoh penggunaan
$basis = 5;
$eksponen = 4;

$hasilPangkat = pangkat($basis, $eksponen);
echo "$basis pangkat $eksponen = $hasilPangkat";
?>