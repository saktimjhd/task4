<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Akses tidak valid.');
}

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$dob = htmlspecialchars($_POST['dob']);
$fileLines = json_decode($_POST['fileLines'], true);
$userAgent = htmlspecialchars($_POST['userAgent']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Hasil Pendaftaran</h1>
        <table>
            <tr>
                <th>Nama</th>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $email ?></td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td><?= $phone ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?= $dob ?></td>
            </tr>
            <tr>
                <th>Browser/Sistem Operasi</th>
                <td><?= $userAgent ?></td>
            </tr>
        </table>
        <h2>Isi File:</h2>
        <table>
            <tr>
                <th>Baris</th>
                <th>Isi</th>
            </tr>
            <?php foreach ($fileLines as $index => $line): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($line) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
