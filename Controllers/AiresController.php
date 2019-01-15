<?php
/**
 * Created by PhpStorm.
 * User: AMINE
 * Date: 14/01/2019
 * Time: 16:15
 */

namespace Controllers;

use Models\aires;
use Models\chantier;
use Services\FlashMessages;

class AiresController
{
    public function addAires()
    {

        require "./Config/config.php";
        $chantier = new chantier();
        $chantier = $chantier->getAllChantier();
        require "./Views/add-aires.php";

//        var_dump($chantier);
//        die;


    }

    public function postaddAires()
    {
        require "./Config/config.php";
        $aires = new aires();
        $aires = $aires->ajouterAires($_POST["denomination"],$_POST["abreviation"],$_POST["chantier"]);
        $msg = new FlashMessages();
        $msg->success('Aires de déchargement a bien été ajouté', $repertory.'/aires/add');
        require "./Views/add-aires.php";




    }

    public function showaires()
    {
        require "./Config/config.php";
        $aires = new aires();
        $aires = $aires->getAllAires();

        require "./Views/showAires.php";

    }
}