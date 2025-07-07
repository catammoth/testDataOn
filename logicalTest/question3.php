<?php
$n = 5; // Jumlah tingkat pola

for ($i = 1; $i <= $n; $i++) {
    // Loop dalam untuk mencetak 'x' sebanyak $i kali
    for ($j = 1; $j <= $i; $j++) {
        echo 'x';
    }
    
    // Tambahkan koma kecuali untuk elemen terakhir
    if ($i < $n) {
        echo ", ";
    }
}
?>