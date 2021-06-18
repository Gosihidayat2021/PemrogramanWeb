<?php
require_once '../model/ModelVaccin.php';

class ControllerVaccin
{

    public static function vaccinReadAll()
    {
        $vaccins = ModelVaccin::getAll();
        // ----- Lihat konstruksi jalur
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewAll.php';
        require($vue);
    }

    // Affiche le formulaire de creation d'un vaccin
    public static function vaccinCreate()
    {
        // ----- Lihat konstruksi jalur
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewInsert.php';
        require($vue);
    }

    // Menampilkan formulir untuk mengambil informasi untuk vaksin baru.
    // Kuncinya dikelola oleh sistem dan bukan oleh pengguna Internet
    public static function vaccinCreated()
    {
        // tambahkan validasi informasi formulir
        $results = ModelVaccin::insert(htmlspecialchars($_GET['label']), htmlspecialchars($_GET['doses']));

        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewInserted.php';
        require($vue);
    }

    // Mengubah dosis vaksin
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


