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
    echo("<h3>New stocks for the center : '$name' have been added</h3>");
} else if ($results['code'] == 2) {
    $name = $results['result'];
    echo("<h3>Stocks for the center : '$name' have been modified</h3>");
} else if ($results['code'] == 3) {
    echo("<h3>No stock was added because you did not enter doses</h3>");
} else {
    echo("<h3>Problem of insertion / modification of stocks</h3>");
}

echo("</div>");

include $root . '/app/view/fragment/fragmentFooter.html';