<?php

require($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';
    ?>
    <h3>Pendapat keseluruhan tentang proyek LO07</h3>

    Pproyek inovatif pada tes saat ini. Menyiapkan direktori Git di bawah platform GitHub dengan cabang
    untuk pengembangan fitur. Campuran bahasa pemrograman: PHP, HTML, CSS, JS (untuk inovasi),
    yang membuat proyek ini lengkap dan informatif. Bahasa terkini yang dapat digunakan dalam dunia profesional.
    Hanya menyesal, tidak menggunakan kerangka kerja atau kerangka kerja mikro (untuk manajemen objek misalnya
    Doktrin ORM).
    Setelah mencoba versi terbaru dari boostrap (di proyek lain), mungkin juga menarik untuk menggunakannya, memang kompatibilitasnya ke belakang
    memungkinkan Anda untuk menggunakan semua fitur yang saat ini digunakan dan akan menyederhanakan beberapa hal yang belum tersedia di versi 3.<br>
    <h4>Ide untuk perbaikan</h4>
    - lihat bahasa lain dengan cepat (JS, reaksi, node.js) + berkomunikasi dengan API atau buat
    API (CRUD, REST). Kemungkinan untuk melihat pengoperasian perangkat lunak seperti Postman. (untuk memiliki lebih banyak kemungkinan untuk
    proyek).
    Jika tidak, akan menarik untuk mempelajari operasi server klien dengan memisahkan bagian klien dan server setidaknya.
    secara teoretis. Ini mungkin akan memungkinkan pemahaman yang lebih baik tentang protokol HTTP dan pendekatan pengembangan proyek.
    seperti yang direncanakan saat ini.
    Mungkin menarik untuk mempelajari tentang aspek keamanan dengan login / kata sandi database yang
    disimpan secara jelas dalam sebuah file.
    <br>
    <h4>Evolusi situs</h4>
    Untuk mengembangkan situs, kita bisa menambahkan modul manajemen pasien (dengan sistem registrasi, registrasi, dll).
    Untuk janji kita juga bisa menambahkan manajemen tanggal dan waktu janji.
    Dimungkinkan untuk mengirim pengingat kepada pengguna / atau konfirmasi melalui email bahwa janji temunya telah dipesan.
    Mungkin menarik untuk menambahkan lebih banyak grafik untuk memvisualisasikan data dengan lebih baik, untuk menghindari sekadar
    daftar dalam bentuk tabel.

</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>