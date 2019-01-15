<?php
/**
 * Created by PhpStorm.
 * User: AMINE
 * Date: 10/01/2019
 * Time: 12:55
 */

namespace Controllers;
use Models\stockage;
use Models\Chantier;
use Services\FlashMessages;


class StockageController
{
    public function addStockage()
    {

        require "./Config/config.php";
        $chantier = new chantier();
        $chantier = $chantier->getAllChantier();
        require "./Views/add-stockage.php";



    }

    public function postaddStockage()
    {
        require "./Config/config.php";
        $stockage = new stockage();
        $stockage = $stockage->ajouterStockage($_POST["denomination"],$_POST["lieux"],$_POST["quantite"],$_POST["entreprise"],$_POST["chantier"]);

        $msg = new FlashMessages();
        $msg->success('Le stockage a bien été ajouté', $repertory.'/stockage/add');
        require "./Views/add-stockage.php";

    }

    public function showsstockage()
    {
        require "./Config/config.php";
        $stockage = new stockage();
        $stockage = $stockage->getAllStockage();

        require "./Views/showStockage.php";

    }
}