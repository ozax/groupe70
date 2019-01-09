<?php
/**
 * Created by PhpStorm.
 * User: AMINE
 * Date: 02/01/2019
 * Time: 15:46
 */

namespace Controllers;

use Models\moyens;
use Models\chantier;
use Services\FlashMessages;

class MoyensController
{
    public function addMoyens()
    {

        require "./Config/config.php";
        $chantier = new chantier();
        $chantier = $chantier->getAllChantier();
        require "./Views/add-moyens.php";

//        var_dump($chantier);
//        die;


    }

    public function postaddMoyens()
    {
        require "./Config/config.php";
        $moyens = new moyens();
        $moyens = $moyens->ajouterMoyens($_POST["immatriculation"],$_POST["denomination"],$_POST["chantier"]);
        $msg = new FlashMessages();
        $msg->success('Le moyens a bien été ajouté', $repertory.'/moyens/add');
        require "./Views/add-moyens.php";

    }

    public function showmoyens()
    {
        require "./Config/config.php";
        $moyens = new moyens();
        $moyens = $moyens->getAllMoyens();

        require "./Views/showMoyens.php";

    }






}