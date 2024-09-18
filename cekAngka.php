<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Angka pada Teks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Cek Angka pada Teks</h1>
            <form method="post" class="mb-2">
                <div class="form-group">
                    <label for="teks" class="form-label">Teks</label><br>
                    <input type="text" class="form-control" id="teks" name="teks" placeholder="Masukkan teks" required>
                </div>
                <button class="btn btn-primary mt-2">Kirim</button>
            </form>

        <?php 
        function cekAngka($teks) { 
            $angka = preg_replace("/[^0-9]/", "", $teks);
        
            if (strlen($angka) > 0) {
                $angkaArray = str_split($angka);
                return "Teks mengandung angka: " . implode(",", $angkaArray); 
            } else {
                return "Teks tidak mengandung angka.";
            }
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $teks = htmlspecialchars($_POST["teks"]);
            echo "<b>Teks : " . htmlspecialchars($teks) . "</b><br>";
            echo cekAngka($teks);
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>