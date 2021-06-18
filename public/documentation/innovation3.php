<?php

require($root . '/app/view/fragment/fragmentHeader.html');
?>

    <body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';
    ?>
    <h3>Where can I get vaccinated?</h3>
    <h4>Innovative aspect</h4>
    We have chosen to carry out a <strong>original use</strong> database data.
    To do this, we have implemented a map that shows with pins where the vaccination center is located.
    Selected by the user, this will allow him to assess whether the center is more or less close to his home.
    <h4> Technical documentation</h4>
    As for the technical solutions used for this, we used jQuery to send an ajax request in XHR
    to a government API, this translates a postal address into a coordinate of the latitude, longitude type. What
    allows using Leaflet (JS library) to place points where the centers are. The card comes from
    Open Street Map.
</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>