<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 19/01/2019
 * Time: 22:09
 */

namespace Controllers;


use Models\calandar;


class CalandarController
{

    public function addCalander()
    {
        require "./Config/config.php";
        require "./Views/add-calander.php";


    }

    public function getCalandar()
    {

        require "./Config/config.php";
        $calandar = new calandar();
        $calandar = $calandar->getCalandar();
       $calandarEncoded =  json_encode($calandar);
       echo $calandarEncoded;


    }

    public function postaddCalandar()
    {
        require "./Config/config.php";
        $calandar = new calandar();
        $calandar = $calandar->ajouterCalandar($_POST["title"],$_POST["start"],$_POST["end"]);

    }

}