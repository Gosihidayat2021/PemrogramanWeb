<?php

require($root . '/app/view/fragment/fragmentHeader.html');
?>

    <body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';
    ?>
    <h3>Dokumentasi: Bagaimana saya bisa mendapatkan vaksinasi?</h3>
    <h4>Aspek inovatif</h4>
    Kami telah memilih untuk membuat halaman yang memungkinkan pengguna untuk memilih kebiasaan yang disesuaikan
    untuk mendapatkan vaksinasi. Tergantung pada suhu luar (di Troyes)
    kami menyarankan Anda berbagai jenis kebiasaan agar senyaman mungkin selama vaksinasi.


    <h4> Dokumentasi teknis</h4>
    Untuk melakukan ini, kami telah menggunakan metode pengambilan untuk memulihkan suhu kota Troyes di Open Wheather
    API. Kemudian, kami menampilkan suhu dan tergantung pada sel kami memiliki beberapa pakaian.
</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>