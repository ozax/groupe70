<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 10/07/2018
 * Time: 23:01
 */

namespace Controllers;


use Models\user;

class UserController
{
    public function adduser()
    {
        require "./Config/config.php";
        require "./Views/add-user.php";


    }

    public function postadduser(){
        require "./Config/config.php";
        require "./Views/add-user.php";
        $user = new user();
        $user = $user->ajouterUtilisateur(htmlspecialchars ($_POST["nom"]),$_POST["prenom"],$_POST["phone"],$_POST["email"], $_POST["password"]);

       // $msg5= new FlashMessages();
        //$
}

   public function showuser(){
       require "./Config/config.php";
       $user = new user();
       $user = $user->getAllUsers();
       require "./Views/showUser.php";
   }

 /**   public function (){
        require "./Config/config.php";
        require "./Views/showUser.php";
        $user = new user();
        $user = $user->getAllUsers();

    }**/
}



