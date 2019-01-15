<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 10/07/2018
 * Time: 23:01
 */

namespace Controllers;


use Models\user;
use Services\FlashMessages;

class UserController
{
    public function adduser()
    {
        require "Config/config.php";
        require "./Views/add-user.php";


    }

    public function postadduser()
    {
        require "./Config/config.php";


        $user = new user();
        $user = $user->ajouterUtilisateur($_POST["nom"],$_POST["prenom"],$_POST["phone"],$_POST["email"], $_POST["password"]);
        $msg = new FlashMessages();
        $msg->success('Lutilisateur a bien été ajouté', $repertory.'/users/add');

        require "./Views/add-user.php";


    }

    public function editUser($id)
    {
        require "./config/config.php";
        $user = new user($id);
        $user = $user->getUser($id);
        $_SESSION['utilisateur']['nom'] = $user['nom'];
        $_SESSION['utilisateur']['prenom'] = $user['prenom'];
        $_SESSION['utilisateur']['phone'] = $user['phone'];
        $_SESSION['utilisateur']['email'] = $user['email'];
        $_SESSION['utilisateur']['password'] = $user['password'];
        require './Views/add-user.php';
    }

    public function postEditUser($id)
    {
        require "./config/config.php";
        $user = new user($id);
        $user = $user->updateUser($id, $_POST["nom"], $_POST["prenom"],$_POST["phone"],$_POST["email"],$_POST["password"]);
        $msg = new FlashMessages();
        $msg->success('L\'utilisateur a bien été modifié', $repertory . '/users');


    }

    public function deleteUser($id)
    {
        require "./config/config.php";
        $user = new user();
        $user = $user->deleteUser($id);
        $msg = new FlashMessages();
        $msg->success('L\'utilisateur a bien été supprimer', $repertory . '/users');
    }

   public function showuser()
   {
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


 public function LoginUser()
 {
     require "Config/config.php";
     require 'Views/login.php';

 }

 public function PostLoginUser(){
        require 'Config/config.php';
        $login = new user();
        $login = $login->getLogin($_POST["email"], ($_POST["password"]));
        if($login == false){
            $msg = new FlashMessages();
            $msg->error('Authentification échouée', $repertory.'/login');

        }else{
            $_SESSION['login_name'] = $login['nom'].' '.$login['prenom'];
            $_SESSION['pass'] = $login['password'];
            /**$_SESSION['admin'] = $login["idEditeur"];**/

            header("Location: ". $repertory. "/");
        }

    }






































}



