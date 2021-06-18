<?php
require_once '../model/ModelCentre.php';

class ControllerCentre
{


    public static function centreReadAll()
    {
        $results = ModelCentre::getAll();
        include 'config.php';
        require($root . '/app/view/centre/viewAll.php');
    }

    public static function centreCreate()
    {
   
        include 'config.php';
        $vue = $root . '/app/view/centre/viewInsert.php';
        require($vue);
    }

    public static function centreCreated()
    {

        $results = ModelCentre::insert(
            htmlspecialchars($_GET['label']), htmlspecialchars($_GET['adresse'])
        );

        include 'config.php';
        $vue = $root . '/app/view/centre/viewInserted.php';
        require($vue);
    }


}