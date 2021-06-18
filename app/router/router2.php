<?php
require('../controller/ControllerCentre.php');
require('../controller/Controller.php');
require('../controller/ControllerPatient.php');
require('../controller/ControllerVaccin.php');
require('../controller/ControllerAppointment.php');
require('../controller/ControllerStock.php');

$query_string = $_SERVER['QUERY_STRING'];

parse_str($query_string, $param);

$action = htmlspecialchars($param["action"]);

$action = $param['action'];

unset($param['action']);

$args = $param;

switch ($action) {
    case "centreReadAll" :
    case "centreCreate" :
    case "centreCreated" :
        ControllerCentre::$action($args);
        break;

    case "patientReadAll" :
    case "patientCreate" :
    case "patientCreated" :
    case "patientViewId":
        ControllerPatient::$action($args);
        break;

    case "vaccinReadAll" :
    case "vaccinCreate" :
    case "vaccinCreated" :
    case "vaccinUpdate" :
    case "vaccinUpdated" :
        ControllerVaccin::$action();
        break;

    case "situationVaccinale":
    case "priseAppointment":
        ControllerAppointment::$action();
        break;

    case "stockReadAllVaccin":
    case "stockReadAll":
    case "stockCreate":
    case "stockCreated":
        ControllerStock::$action();
        break;

    case "graphStockVaccin":
    case "weather":
    case "mapCentreVaccination" :
    case "innovation1" :
    case "innovation2" :
    case "innovation3" :
    case "noticeGlobal" :
        Controller::$action();
        break;

    default:
        $action = "home";
        Controller::$action();
}
