<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 10/07/2018
 * Time: 23:01
 */

namespace Controllers;


use Models\chantier;

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
        require "./Views/add-chantier.php";
        $chantier = new chantier();
        $chantier = $chantier->ajouterChantier($_POST["nomChantier"],$_POST["adresse"]);
    }

}