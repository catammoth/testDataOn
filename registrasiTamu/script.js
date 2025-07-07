document.getElementById("guestForm").addEventListener("submit", function (e) {
  e.preventDefault(); // Mencegah form submit default

  // Validasi sederhana
  const name = document.getElementById("name").value;
  const phone = document.getElementById("phone").value;
  const idCardNumber = document.getElementById("id_card_number").value;

  if (name.length < 3) {
    showMessage("Nama harus minimal 3 karakter!", "error");
    return;
  }

  if (!/^[0-9]+$/.test(phone)) {
    showMessage("Nomor telepon harus angka!", "error");
    return;
  }

  if (idCardNumber.length < 5) {
    showMessage("Nomor ID Card tidak valid!", "error");
    return;
  }

  // Jika validasi lolos, submit form secara programatik
  this.submit();
});

function showMessage(text, type) {
  const messageDiv = document.getElementById("message");
  messageDiv.textContent = text;
  messageDiv.className = type; // 'error' atau 'success' (bisa ditambah di CSS)
}
