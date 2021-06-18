<?php

require($root . '/app/view/fragment/fragmentHeader.html');
?>

    <body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';
    ?>
    <h3>Di mana saya bisa mendapatkan vaksinasi?</h3>
    <h4>Aspek inovatif</h4>
    Kami telah memilih untuk mewujudkannya <strong>pemanfaatan asli</strong> data dari basis.
    Untuk melakukan ini, kita harus menerapkan kartu yang menunjukkan dengan pin di mana pusat vaksinasi berada
    dipilih oleh pengguna, ini memungkinkan dia untuk mengevaluasi apakah pusat lebih atau kurang dekat dengannya.

    <h4> Dokumentasi teknis</h4>
    Adapun solusi teknis yang digunakan untuk ini, kami menggunakan jQuery untuk mengirim permintaan ajax di XHR
    ke API pemerintah, ini menerjemahkan alamat pos menjadi koordinat tipe garis lintang dan garis bujur. Apa
    memungkinkan penggunaan Leaflet (perpustakaan JS) untuk menempatkan titik di mana pusatnya berada. Kartu berasal dari
    Buka Peta Jalan.
</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>