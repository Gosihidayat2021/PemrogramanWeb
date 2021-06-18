<?php
require_once '../model/ModelAppointment.php';
require_once '../model/ModelCentre.php';
require_once '../model/ModelVaccin.php';

class ControllerAppointment
{

    public static function vaccinationSituation()
    {
        $patient_id = $_GET['id'];

        $results = ModelAppointment::getvaccinationSituation($patient_id);

        echo("<br>");
        echo("<br>");
        include 'config.php';

        if (count($results) == 0) {
            $centres = ModelCentre::getAllWithAtLeastOneShot();
            $view = $root . '/app/view/rdv/choixCentre.php';

        } else {

            $vaccin_id = $results[0]['vaccin_id'];
            $vaccin = ModelVaccin::getOne($vaccin_id);

            if ($vaccin->getDoses() == count($results)) {
                $view = $root . '/app/view/rdv/dossierVaccination.php';
            }
            else {
                $centres = ModelCentre::getAllWithAtLeastOneShotWithVaccine($vaccin_id);
                $view = $root . '/app/view/rdv/choixCentre.php';
            }
        }
        require($view);
    }

    // Pasien telah memilih pusat, dia diberi dosis yang paling tersedia
    public static function takenAppointment()
    {
        $centre_id = $_GET['centre'];
        $patient_id = $_GET['patient'];

        $results = ModelAppointment::getvaccinationSituation($patient_id);
        if (count($results) == 0) {
            $vaccin_id = ModelAppointment::getMostAvailableVaccinByCentre($centre_id);
            ModelAppointment::vaccine($centre_id, $patient_id, $vaccin_id, 1);
        } else {

            $previous_vaccin_id = $results[0]['vaccin_id'];

            ModelAppointment::vaccine($centre_id, $patient_id, $previous_vaccin_id, count($results)+1);
        }

        $results = ModelAppointment::getvaccinationSituation($patient_id);

        include 'config.php';

        $view = $root . '/app/view/rdv/takenAppointment.php';
        require($view);
    }
}