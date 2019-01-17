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

    public function editSociete($id)
    {
        require "./config/config.php";
        $societe = new societe($id);
        $societe = $societe->getSociete($id);
        $_SESSION['societe']['raisonSociale'] = $societe['raisonSociale'];
        $_SESSION['societe']['telephone'] = $societe['telephone'];
        $_SESSION['societe']['adresse'] = $societe['adresse'];

        require './Views/add-societe.php';
    }

    public function postEditSociete($id)
    {
        require "./config/config.php";
        $societe = new societe($id);
        $societe = $societe->updateSociete($id, $_POST["raisonSociale"],$_POST["telephone"], $_POST["adresse"]);
        $msg = new FlashMessages();
        $msg->success('La societe a bien été modifié', $repertory . '/societe');


    }

    public function deleteSociete($id)
    {
        require "./config/config.php";
        $societe = new societe();
        $societe = $societe->deleteSociete($id);
        $msg = new FlashMessages();
        $msg->success('La Societe a bien été supprimer', $repertory . '/societe');
    }

    public function showsociete()
    {
        require "./Config/config.php";
        $societe = new societe();
        $societe = $societe->getAllSociete();
        require "./Views/showSociete.php";

    }

}