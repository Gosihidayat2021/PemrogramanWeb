<?php
require($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';

    if (count($results) == 1) {
        printf("You will receive a first dose of the vaccine %s at %s (Center address : %s)", $results[0]['vaccin'], $results[0]['centre'], $results[0]['adresse']);
    } elseif (count($results) == 2) {
        printf("You will receive a second dose of the vaccine %s at %s (Center address : %s)", $results[1]['vaccin'], $results[1]['centre'], $results[1]['adresse']);
    } else {
        printf("You will receive your dose n°%d du vaccine %s at %s (Center address : %s)", count($results), $results[1]['vaccin'], $results[1]['centre'], $results[1]['adresse']);

    }
    ?>


</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
