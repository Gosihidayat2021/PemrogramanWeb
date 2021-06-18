<?php

require($root . '/app/view/fragment/fragmentHeader.html');
?>

    <body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';
    ?>
    <h3>Dokumentasi status stok vaksin</h3>
    <h4>Aspek inovatif</h4>
    Kami telah memilih untuk melakukan <strong>penggunaan asli</strong> data basis data.
    Untuk melakukan ini, kami telah membuat grafik yang mewakili jumlah total vaksin yang tersedia berdasarkan kategori.

    <h4> Dokumentasi teknis</h4>
    Untuk realisasinya, kami telah menggunakan bagan toko buku.js. Ini memungkinkan kita untuk membuat grafik dalam
    javascript dengan mudah.
    Kami mentransfer data php di js menggunakan json_encode.
    Kemudian kita memanggil fungsi perpustakaan untuk mendapatkan grafik batang dengan
    warna kustom.

</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>