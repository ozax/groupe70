<?php
/**
 * Created by PhpStorm.
 * User: AMINE
 * Date: 02/01/2019
 * Time: 18:34
 */

namespace Controllers;
use Models\societe;
use Services\FlashMessages;



class SocieteController
{
    public function addSociete()
    {
        require "./Config/config.php";
        require "./Views/add-societe.php";

    }

    public function postaddSociete()
    {
        require "./Config/config.php";
        $societe = new societe();
        $societe = $societe->ajouterSociete($_POST["raisonSociale"],$_POST["telephone"],$_POST["adresse"]);
        $msg = new FlashMessages();
        $msg->success('L socite a bien été ajouté', $repertory.'/societe/add');
        require "./Views/add-societe.php";

    }

    public function showsociete()
    {
        require "./Config/config.php";
        $societe = new societe();
        $societe = $societe->getAllSociete();
        require "./Views/showSociete.php";

    }

}