<?php
require_once '../model/ModelCentre.php';

class ControllerCentre
{

    // List Centre
    public static function centreReadAll()
    {
        $results = ModelCentre::getAll();
        include 'config.php';
        require($root . '/app/view/centre/viewAll.php');
    }

    public static function centreCreate()
    {
        // ----- Lihat konstruksi jalur
        include 'config.php';
        $vue = $root . '/app/view/centre/viewInsert.php';
        require($vue);
    }

    public static function centreCreated()
    {
        // Tambahkan validasi informasi formulir
        $results = ModelCentre::insert(
            htmlspecialchars($_GET['label']), htmlspecialchars($_GET['address'])
        );
        // ----- Lihat konstruksi jalur
        include 'config.php';
        $vue = $root . '/app/view/centre/viewInserted.php';
        require($vue);
    }


}