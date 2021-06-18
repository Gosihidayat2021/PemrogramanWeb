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
    $nom = $results["nom"];
    $prenom = $results["prenom"];
    echo("<h3>The new patient : $nom $prenom has been added </h3>");
} else {
    echo("<h3>Patient insertion problem</h3>");
}

echo("</div>");

include $root . '/app/view/fragment/fragmentFooter.html';