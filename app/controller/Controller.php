<?php

require_once "../model/Model.php";
require_once "../model/ModelCentre.php";
require_once "../model/ModelStock.php";

class Controller
{
    public static function Home()
    {
        include 'config.php';
        $vue = $root . '/app/view/viewHome.php';
        require($vue);
    }

    public static function graphStockVaccin()
    {

        $results = ModelStock::getStockGraph();

        include 'config.php';
        $vue = $root . '/app/view/vaccin/graphStockVaccin.php';
        require($vue);
    }

    public static function mapCentreVaccination()
    {

        $results = ModelCentre::getAll();

        include 'config.php';
        $vue = $root . '/app/view/centre/mapCentreVaccination.php';
        require($vue);
    }

    public static function weather()
    {
        include 'config.php';
        $vue = $root . '/app/view/vaccin/weather.php';
        require($vue);
    }

    public static function innovation1() {
        include 'config.php';
        $vue = $root . '/public/documentation/innovation1.php';
        require($vue);
    }


    public static function innovation2() {
        include 'config.php';
        $vue = $root . '/public/documentation/innovation2.php';
        require($vue);
    }


    public static function innovation3() {
        include 'config.php';
        $vue = $root . '/public/documentation/innovation3.php';
        require($vue);
    }

    public static function noticeGlobal() {
        include 'config.php';
        $vue = $root . '/public/documentation/noticeGlobal.php';
        require($vue);
    }

}