<?php

require($root . '/app/view/fragment/fragmentHeader.html');
?>

    <body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';
    ?>
    <h3>Documentation: How should I dress to be vaccinated?</h3>
    <h4>Innovative aspect</h4>
    We have chosen to create a one-page page to help the user choose suitable clothes.
    to get vaccinated. Depending on the outside temperature (in Troyes)
    we recommend different types of clothes to be as comfortable as possible during the vaccination.


    <h4> Technical documentation</h4>
    To do this, we used the fetch method to retrieve the temperature of the city of Troyes on Open Wheather
    API. Then we display the temperature and depending on it we recommend several clothes.
</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>