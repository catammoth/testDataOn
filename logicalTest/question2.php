<?php

// Buatlah sebuah kode untuk membuat hasil seperti: 1, 3, 6, 10, 15, 21, ...
// Angka terakhir ditentukan oleh parameter $n
function deretSegitiga($n) {
    $nilai = 0;
    for ($i = 1; $i <= $n; $i++) {
        $nilai += $i; // Menambahkan nilai i ke nilai
        echo $nilai;
        if ($i < $n) {
            echo ", ";
        }
    }
}

// Contoh penggunaan untuk 6 angka pertama
deretSegitiga(6);
?>