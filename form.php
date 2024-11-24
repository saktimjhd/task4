<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Form Pendaftaran</h1>
        <p class="instructions">Harap isi formulir di bawah ini dengan benar sesuai ketentuan yang telah ditentukan:</p>
        <ul class="form-rules">
            <li>Nama maksimal 50 karakter.</li>
            <li>Email harus valid sesuai format (contoh: example@email.com).</li>
            <li>Nomor telepon antara 10-15 digit.</li>
            <li>Tanggal lahir harus diisi.</li>
            <li>File teks (hanya .txt) dengan ukuran maksimal 500KB.</li>
        </ul>
        <form action="process.php" method="POST" enctype="multipart/form-data" id="registrationForm">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required maxlength="50">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="phone">Nomor Telepon:</label>
            <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon" required pattern="\d{10,15}">

            <label for="dob">Tanggal Lahir:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="file">Unggah File Teks:</label>
            <input type="file" id="file" name="file" accept=".txt" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
