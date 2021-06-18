<?php

require($root . '/app/view/fragment/fragmentHeader.html');
?>

    <body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';
    ?>
    <h3>Documentation of vaccine stock status</h3>
    <h4>Innovative aspect</h4>
    We have chosen to carry out a <strong>original use</strong> database data.
    To do this we have produced a graph representing the number of total vaccines available by category.

    <h4> Technical documentation</h4>
    For the realization, we used the chart.js library. This allows us to produce graphics in
    javascript easily.
    We have transferred the php data to js using a json_encode.
    Then we called the functions of the library to obtain a bar graph with
    custom colors.

</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>