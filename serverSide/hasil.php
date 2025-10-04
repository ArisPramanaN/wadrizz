<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web Saya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $nama = "I Putu Gede Aris Pramana Nugraha";
        $nim = "102022400137";
        $fakultas = "Fakultas Rekayasa Industri";
        $prodi = "S1 Sistem Informasi";
    ?>

    <img src="Foto_Aris_Pramana.jpg" alt="Foto Profil">
    <h1><?php echo $nama; ?></h1>
    <p><?php echo "$nim / $fakultas / $prodi"; ?></p>

    <div class="social-icons">
        <a href="https://x.com" target="_blank">X</a>
        <a href="https://github.com/ArisPramanaN/wadrizz" target="_blank">GitHub</a>
        <a href="https://instagram.com/arisprmn._" target="_blank">IG</a>
    </div>

</body>
</html>
