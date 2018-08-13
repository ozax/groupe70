<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 10/07/2018
 * Time: 23:01
 */

namespace Controllers;


use Models\chantier;
use Services\FlashMessages;

class ChantierController
{
    public function addChantier()
    {
        require "./Config/config.php";
        require "./Views/add-chantier.php";


    }


   public function postaddChantier()
    {
        require "./Config/config.php";
        $chantier = new chantier();
        $chantier = $chantier->ajouterChantier($_POST["nomChantier"],$_POST["adresse"]);
        $msg = new FlashMessages();
        $msg->success('Le chantier a bien été ajouté', $repertory.'/chantier/add');
        require "./Views/add-chantier.php";
    }

    public function showchantier()
    {
        require "./Config/config.php";
        $chantier = new chantier();
        $chantier = $chantier->getAllChantier();
        require "./Views/showChantier.php";

    }

}