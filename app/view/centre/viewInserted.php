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
    echo("<h3>The new center : '$results' has been added </h3>");
} else {
    echo("<h3>Center insertion problem</h3>");
}

echo("</div>");

include $root . '/app/view/fragment/fragmentFooter.html';