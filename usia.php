<?php 
$ages = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

$jumlahDewasa = 0;
$jumlahAnak = 0;

echo "List Usia: ";
echo implode(", ", $ages);

foreach ($ages as $age) {
    if ($age >= 17) {
        $jumlahDewasa++; 
    } else {
        $jumlahAnak++;
    }
}

echo "<br>";
echo "Jumlah Kategori Dewasa: <b>" . $jumlahDewasa . "</b><br>";
echo "Jumlah Kategori Anak-Anak: <b>" . $jumlahAnak . "</b>";   
?>