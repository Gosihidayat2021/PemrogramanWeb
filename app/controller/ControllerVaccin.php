<?php
require_once '../model/ModelVaccin.php';

class ControllerVaccin
{

    public static function vaccinReadAll()
    {
        $vaccins = ModelVaccin::getAll();

        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewAll.php';
        require($vue);
    }


    public static function vaccinCreate()
    {

        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewInsert.php';
        require($vue);
    }


    public static function vaccinCreated()
    {

        $results = ModelVaccin::insert(htmlspecialchars($_GET['label']), htmlspecialchars($_GET['doses']));

        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewInserted.php';
        require($vue);
    }

    public static function vaccinUpdate()
    {
        $vaccins = ModelVaccin::getAll();

        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewUpdate.php';
        require($vue);
    }

    public static function vaccinUpdated()
    {
        $vaccin_id = $_GET['vaccin'];
        $doses = $_GET['doses'];
        $results = ModelVaccin::update($vaccin_id, $doses);

        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewUpdated.php';
        require($vue);
    }
}

?>


