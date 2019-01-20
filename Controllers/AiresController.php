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

    public function editAire($id)
    {
        require "./config/config.php";
        $aires = new aires($id);
        $aires = $aires->getAire($id);
        $_SESSION['aires']['denomination'] = $aires['denomination'];
        $_SESSION['aires']['abreviation'] = $aires['abreviation'];
        $_SESSION['aires']['Chantier'] = $aires['Chantier'];

        require './Views/add-aires.php';
    }

    public function postEditAire($id)
    {
        require "./config/config.php";
        $aires = new aires($id);
        $aires = $aires->updateAire($id, $_POST["denomination"],$_POST["abreviation"], $_POST["Chantier"]);
        $msg = new FlashMessages();
        $msg->success('L aire de dechargement a bien été modifié', $repertory . '/aires');


    }

    public function deleteAire($id)
    {
        require "./config/config.php";
        $aires = new aires();
        $aires = $aires->deleteAire($id);
        $msg = new FlashMessages();
        $msg->success('L Aire a bien été supprimer', $repertory . '/aires');
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