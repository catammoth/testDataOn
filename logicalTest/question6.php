<?php
function generateNumberPattern($number) {
    $digits = str_split($number); // Memisahkan setiap digit
    $length = count($digits); // Menghitung jumlah digit
    
    foreach ($digits as $index => $digit) {
        // Jumlah nol = panjang total - posisi - 1
        $zeros = $length - $index - 1;
        
        // Cetak digit diikuti nol
        echo $digit . str_repeat('0', $zeros) . "\n";
    }
}

// Memproses input dari user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = isset($_POST['number']) ? $_POST['number'] : '';
    
    if (is_numeric($input) && $input > 0) {
        echo "<h3>Pola untuk input $input:</h3>";
        echo "<pre>";
        generateNumberPattern($input);
        echo "</pre>";
    } else {
        echo "<p style='color:red'>Masukkan angka positif yang valid!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generator Pola Angka</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin: 20px 0; padding: 20px; border: 1px solid #ddd; }
        pre { font-family: monospace; font-size: 18px; }
    </style>
</head>
<body>
    <h2>Generator Pola Angka dengan Nol</h2>
    <form method="post">
        <label for="number">Masukkan angka:</label>
        <input type="text" id="number" name="number" pattern="\d+" title="Masukkan angka positif" required>
        <button type="submit">Generate</button>
    </form>

    <h3>Contoh Pola:</h3>
    <p>Input: 123456789</p>
    <pre>
100000000
20000000
3000000
400000
50000
6000
700
80
9
    </pre>
</body>
</html>