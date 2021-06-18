<?php
require_once '../model/ModelPatient.php';

class ControllerPatient
{


    public static function patientReadAll()
    {
        $results = ModelPatient::getAll();

        include 'config.php';
        require($root . '/app/view/patient/viewAll.php');
    }

    public static function patientViewId()
    {
        $results = ModelPatient::getAll();

        include 'config.php';
        require($root . '/app/view/patient/viewId.php');
    }



    public static function patientCreate()
    {
        include 'config.php';
        $vue = $root . '/app/view/patient/viewInsert.php';
        require($vue);
    }

    public static function patientCreated()
    {
        $results = ModelPatient::insert(
            htmlspecialchars($_GET['last name']), htmlspecialchars($_GET['first name']), htmlspecialchars($_GET['address'])
        );

        include 'config.php';
        $vue = $root . '/app/view/patient/viewInserted.php';
        require($vue);
    }
}