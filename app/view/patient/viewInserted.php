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
if ($results) {
    $lastname = $results["lastname"];
    $firstname = $results["firstname"];
    echo("<h3>Pasien baru : $lastname $firstname telah ditambahkan </h3>");
} else {
    echo("<h3>Kesalahan menambahkan pasien</h3>");
}

echo("</div>");

include $root . '/app/view/fragment/fragmentFooter.html';