<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];

    // Path ke file txt untuk menyimpan favorit
    $file = 'favorit_anime.txt';

    // Tambahkan judul anime ke file
    file_put_contents($file, $judul . PHP_EOL, FILE_APPEND);

    echo 'Anime berhasil ditambahkan ke favorit!';
}
?>
