<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Total Kompensasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Menghitung Total Kompensasi</h1>
        <form method="post" class="mb-2">
            <div class="form-group mb-2">
                <label for="jamMasuk" class="form-label">Jam Datang</label><br>
                <input type="number" class="form-control" id="jamMasuk" name="jamMasuk" placeholder="Masukkan jam datang" required>
            </div>
            <div class="form-group">
                <label for="jamPulang" class="form-label">Jam Pulang</label><br>
                <input type="number" class="form-control" id="jamPulang" name="jamPulang" placeholder="Masukkan jam pulang" required>
            </div>
            <button class="btn btn-primary mt-2">Kirim</button>
        </form>

    <?php 
    function hitungKompensasi($jamMasuk, $jamPulang) {
        $kompensasiPertama = 50000;
        $kompensasiBerikutnya = 25000;
        $jamKerja = 8;

        $jamBekerja = $jamPulang - $jamMasuk;
        $jamLembur = $jamBekerja - $jamKerja;
        
        $totalKompensasi = 0;

        if ($jamLembur > 0) {
            $totalKompensasi += $kompensasiPertama;

            if ($jamLembur > 1) {
                $totalKompensasi += ($jamLembur - 1) * $kompensasiBerikutnya;
            }
        }

        return [$jamBekerja, $jamLembur, $totalKompensasi];
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jamMasuk = isset($_POST["jamMasuk"]) ? (int)$_POST["jamMasuk"] : 0;
        $jamPulang = isset($_POST["jamPulang"]) ? (int)$_POST["jamPulang"] : 0;

        list($jamBekerja, $jamLembur, $totalKompensasi) = hitungKompensasi($jamMasuk, $jamPulang);       // list => menetapkan nilai variabel dalam satu operasi

        echo "Lama Kerja : " . $jamBekerja;
        echo "<br>";
        echo "Jam Lebih : " . $jamLembur;
        echo "<br>";
        echo "Jumlah Kompensasi Rp" . number_format($totalKompensasi, 0, ",", ".");
    }
    ?>
</body>
</html>