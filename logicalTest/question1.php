<?php

// Buatlah sebuah kode untuk membuat hasil seperti: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, …
// Angka terakhir ditentukan oleh parameter $n
function printSequence($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo $i;
        if ($i < $n) {
            echo ", ";
        }
    }
}
// Contoh penggunaan fungsi
printSequence(10);
?>