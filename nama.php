<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Jumlah Selisih Karakter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Cek Jumlah Selisih Karakter</h1>
        <form method="post" class="mb-2">
            <div class="form-group mb-2">
                <label for="namaPertama" class="form-label">Nama Pertama</label><br>
                <input type="text" class="form-control" id="namaPertama" name="namaPertama" placeholder="Masukkan nama pertama" required>
            </div>
            <div class="form-group">
                <label for="namaKedua" class="form-label">Nama Kedua</label><br>
                <input type="text" class="form-control" id="namaKedua" name="namaKedua" placeholder="Masukkan nama kedua" required>
            </div>
            <button class="btn btn-primary mt-2">Kirim</button>
        </form>

    <?php 
    function hitungSelisihKarakter($nama1, $nama2) {
        $panjangNama1 = strlen($nama1); 
        $panjangNama2 = strlen($nama2);
    
        $selisih = abs($panjangNama1 - $panjangNama2);
    
        if ($panjangNama1 > $panjangNama2) {
            echo "<u>" . htmlspecialchars($nama1) . "</u> memiliki jumlah karakter lebih banyak dari <u>" . htmlspecialchars($nama2) . "</u> : selisih <b>" . $selisih . "</b> karakter";
        } else {
            echo "<u>" . htmlspecialchars($nama2) . "</u> memiliki jumlah karakter lebih banyak dari <u>" . htmlspecialchars($nama1) . "</u> : selisih <b>" . $selisih . "</b> karakter";
        } 
        }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama1 = htmlspecialchars($_POST["namaPertama"]);
        $nama2 = htmlspecialchars($_POST["namaKedua"]);

        echo hitungSelisihKarakter($nama1, $nama2);
    }
    ?>
    </div>
</body>
</html>

