<?php
// Fungsi untuk menghasilkan pola vertikal
function generateVerticalPattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Baris pertama dan kedua
        if ($i <= 2) {
            echo str_repeat('X', $i) . "\n";
            continue;
        }
        
        // Baris terakhir
        if ($i == $n) {
            echo str_repeat('X', $n) . "\n";
            continue;
        }
        
        // Baris tengah (X, diikuti o, diakhiri X)
        echo 'X' . str_repeat('o', $i - 2) . 'X' . "\n";
    }
}

// Memproses input dari user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = isset($_POST['number']) ? (int)$_POST['number'] : 0;
    
    if ($input > 0) {
        echo "<h3>Pola untuk input $input:</h3>";
        echo "<pre>";
        generateVerticalPattern($input);
        echo "</pre>";
    } else {
        echo "<p style='color:red'>Masukkan angka positif yang valid!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generator Pola Vertikal</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin: 20px 0; padding: 20px; border: 1px solid #ddd; }
        pre { font-family: monospace; font-size: 18px; }
    </style>
</head>
<body>
    <h2>Generator Pola Vertikal</h2>
    <form method="post">
        <label for="number">Masukkan angka (3-10):</label>
        <input type="number" id="number" name="number" min="3" max="10" required>
        <button type="submit">Generate</button>
    </form>

    <h3>Contoh Pola:</h3>
    <p>Input: 5</p>
    <pre>
X
XX
XoX
XooX
XXXXX
    </pre>

    <p>Input: 7</p>
    <pre>
X
XX
XoX
XooX
XoooX
XooooX
XXXXXXX
    </pre>
</body>
</html>