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
if ($results !== -1) {
    echo("<h3>Vaksin baru " . $_GET['label'] . " telah ditambahkan </h3>");
    echo("<ul>");
    echo("<li>id = " . $results . "</li>");
    echo("<li>Label = " . $_GET['label'] . "</li>");
    echo("<li>Doses = " . $_GET['doses'] . "</li>");
    echo("</ul>");
} else {
    echo("<h3>Kesalahan menambahkan vaksin</h3>");
}


echo("</div>");

include $root . '/app/view/fragment/fragmentFooter.html';
?>