<?php 
$jumlahUang = 140500;
$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
$hasil = [];
echo "Uang : Rp" . number_format($jumlahUang, 0, ",", "."); 

foreach ($pecahan as $lembar) {
    $jumlahLembar = floor($jumlahUang/$lembar);

    if ($jumlahLembar > 0) {
        $hasil[$lembar] = $jumlahLembar;
        $jumlahUang -= $lembar * $jumlahLembar;
    }
}

echo "<br>";
echo "Lembar Rupiah <br>";

foreach ($hasil as $lembar => $jumlahLembar) {
    echo "Rp" . number_format($lembar, 0, ",", ".") . " : " . $jumlahLembar . "<br>";
}
?>