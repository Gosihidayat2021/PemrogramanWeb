<?php
require($root . '/app/view/fragment/fragmentHeader.html');
?>

    <body>
        <div class="container">
            <?php
            include $root . '/app/view/fragment/fragmentMenu.html';
            include $root . '/app/view/fragment/fragmentJumbotron.html';
            ?>

            <h3>Tambahkan pasien</h3>
            <form role="form" method='get' action='router2.php'>
                <div class="form-group">
                    <input type="hidden" name='action' value='patientCreated'>
                    <label for="id">Last name : </label><br/><input type="text" name='lastname' size='40' value=''><br/><br/>
                    <label for="id">First name : </label><br/><input type="text" name='firstname' size='40' value=''><br/><br/>
                    <label for="id">Address : </label><br/><input type="text" name='adresse' size='80'
                                                                value=''>
                </div>
                <button class="btn btn-primary" type="submit">Tambahkan</button>
            </form>
        </div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>