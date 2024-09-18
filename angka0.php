<?php 
for ($x = 1; $x <= 11; $x++) {
    $hasil = 5 * $x;

    if (strpos((string)$hasil, "0") === false) { 
        echo $x . " x 5 = " . $hasil . "<br>";
    }
}
?>