<?php 
$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

$jumlah = array_count_values($data);

if (isset($jumlah[$cari])) { 
    echo "Jumlah angka " . $cari . " = " . $jumlah[$cari];
} 
?>