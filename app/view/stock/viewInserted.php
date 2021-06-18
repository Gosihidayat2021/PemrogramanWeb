<?php
require($root . '/app/view/fragment/fragmentHeader.html');
?>

    <body>
<div class="container">
<?php
include $root . '/app/view/fragment/fragmentMenu.html';
include $root . '/app/view/fragment/fragmentJumbotron.html';
?>

<?php
if ($results['code'] == 1) {
    $name = $results['result'];
    echo("<h3>Stok baru untuk pusat : '$name' telah ditambahkan</h3>");
} else if ($results['code'] == 2) {
    $name = $results['result'];
    echo("<h3>Stok untuk pusat : '$name' telah dimodifikasi</h3>");
} else if ($results['code'] == 3) {
    echo("<h3>Tidak ada stok yang ditambahkan karena Anda tidak memasukkan dosis</h3>");
} else {
    echo("<h3>Masalah penyisipan / modifikasi saham</h3>");
}

echo("</div>");

include $root . '/app/view/fragment/fragmentFooter.html';