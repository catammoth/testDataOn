<?php
/*if (!isset($_SERVER['REQUEST_METHOD'])) {
    die("Error: Skrip harus diakses melalui HTTP request");
}

// Pastikan method adalah POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Error: Form harus di-submit dengan method POST");
}
*/

// Validasi semua input
$required = ['name', 'email', 'phone', 'purpose', 'id_card_number'];
foreach ($required as $field) {
    if (!isset($_POST[$field])) {
        die("Error: Field $field harus diisi");
    }
    
    // Bersihkan input
    $_POST[$field] = trim($_POST[$field]);
    if (empty($_POST[$field])) {
        die("Error: Field $field tidak boleh kosong");
    }
}

// Handle file upload
if (!isset($_FILES['id_card_image']) || $_FILES['id_card_image']['error'] !== UPLOAD_ERR_OK) {
    die("Error: File ID Card harus diupload");
}

// 4. Koneksi database
$conn = new mysqli('localhost', 'root', '', 'guest_registration');
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// 5. Ambil data dari form dengan filter
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$purpose = $conn->real_escape_string($_POST['purpose']);
$id_card_number = $conn->real_escape_string($_POST['id_card_number']);

// 6. Proses upload file
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["id_card_image"]["name"]);
if (move_uploaded_file($_FILES["id_card_image"]["tmp_name"], $target_file)) {
    // 7. Simpan ke database
    $sql = "INSERT INTO guests (name, email, phone, purpose, id_card_number, id_card_image) 
            VALUES ('$name', '$email', '$phone', '$purpose', '$id_card_number', '$target_file')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error upload file";
}

$conn->close();
?>