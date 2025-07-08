<?php
function generateSequence($count) {
    $result = [1];
    $current = 1;
    $addTwo = true; // Flag untuk menentukan penambahan
    
    for ($i = 1; $i < $count; $i++) {
        if ($i == 1) {
            // Langkah kedua: tambah 2
            $current += 2;
        } elseif ($i == 2) {
            // Langkah ketiga: tambah 3
            $current += 3;
        } else {
            // Setelahnya selalu tambah 2
            $current += 2;
        }
        $result[] = $current;
    }
    
    return implode(', ', $result);
}

echo generateSequence(7); // Output: 1, 3, 6, 8, 10, 12, 14
?>