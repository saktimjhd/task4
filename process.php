<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $dob = htmlspecialchars(trim($_POST['dob']));

    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $fileSize = $file['size'];
        $fileType = $file['type'];
        $fileTmpName = $file['tmp_name'];

        if ($fileType !== 'text/plain') {
            die('Hanya file teks (.txt) yang diperbolehkan.');
        }

        if ($fileSize > 500000) {
            die('Ukuran file maksimal adalah 500KB.');
        }

        $fileContent = file_get_contents($fileTmpName);
        $fileLines = explode("\n", $fileContent);
    } else {
        die('File tidak ditemukan.');
    }

    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    
    ?>
    <form id="redirectForm" action="result.php" method="POST">
        <input type="hidden" name="name" value="<?= htmlspecialchars($name) ?>">
        <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">
        <input type="hidden" name="phone" value="<?= htmlspecialchars($phone) ?>">
        <input type="hidden" name="dob" value="<?= htmlspecialchars($dob) ?>">
        <input type="hidden" name="fileLines" value="<?= htmlspecialchars(json_encode($fileLines)) ?>">
        <input type="hidden" name="userAgent" value="<?= htmlspecialchars($userAgent) ?>">
    </form>
    <script>
        document.getElementById('redirectForm').submit();
    </script>
    <?php
    exit();
}
?>
