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
if ($results === 0) {
    echo("<h3>Vaccine " . $_GET['vaccin'] . " was modified</h3>");
    echo("<ul>");
    echo("<li>Doses = " . $_GET['doses'] . "</li>");
    echo("</ul>");
} else {
    echo("<h3>vaccine modification problem</h3>");
}


echo("</div>");

include $root . '/app/view/fragment/fragmentFooter.html';
?>