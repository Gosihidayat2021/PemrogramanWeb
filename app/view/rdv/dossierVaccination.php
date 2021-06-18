<?php
require($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';


    echo("<h2> You have already received all of your vaccine doses</h2>");

    ?>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">Injection</th>
            <th scope="col">Vaccine</th>
            <th scope="col">Centre</th>
            <th scope="col">Address</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $id = 1;
        foreach ($results as $dose) {
            printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>", $id,
                $dose['vaccin'], $dose['centre'], $dose['adresse']);
            $id++;
        }
        ?>
        </tbody>
    </table>


</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

