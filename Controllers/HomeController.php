<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 10/07/2018
 * Time: 23:01
 */

namespace Controllers;


class HomeController
{
    public function indexHome()
    {
        require "./config/config.php";
        require './Views/home.php';


    }

    public function showClandar()
    {
        require "./config/config.php";
        require './Views/calandar.php';


    }

    public function showClandarSalle()
    {
        require "./config/config.php";
        require './Views/calanderSalle.php';


    }

}



