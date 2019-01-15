<?php

namespace Models;
use Services\Connect;

class user
{
    private $id;
    private $Nom;
    private $Prenom;
    private $email;
    private $phone;

    public function __construct()
    {
        $this->db = new Connect();
        $this->db = $this->db->getPdo();
    }

    /** public function getEditeur($id){
    $db = $this->db;
    $reponse = $this->db->query("SELECT * FROM Editeur WHERE idEditeur = $id");
    return $reponse->fetch($db::FETCH_ASSOC);
    }**/

     public function getAllUsers()
    {
    $db = $this->db;
    $reponse = $this->db->query("SELECT * FROM utilisateur");
    return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function getUser($id)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM utilisateur WHERE id = $id");
        return $reponse->fetch($db::FETCH_ASSOC);
    }

    public function updateUser($id,$nom,$prenom,$phone,$email,$password){
        $db = $this->db;
        $query = $db->prepare("UPDATE utilisateur SET nom= :n, prenom =:p ,phone=:ph ,email=:e ,password=:pw WHERE utilisateur.id=$id");
        return $query->execute(array(

            'n' => $nom,
            'p' => $prenom,
            'ph'=>$phone,
            'e'=>$email,
            'pw'=>$password,
        ));

    }



    public function ajouterUtilisateur($nom, $prenom, $phone,$email, $password)
    {
        $db = $this->db;
        $query = $db->prepare ("INSERT INTO utilisateur(nom, prenom, phone, email, password) VALUES (:nom,:prenom,:phone,:email,:password)");
        return $query->execute (array(
            'nom' => $nom,
            'prenom' => $prenom ,
            'phone' => $phone,
            'email' => $email,
            'password'=>$password

        ));
    }

    public function getLogin($email, $password){
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM utilisateur WHERE email = '$email' AND password = '$password'");
        return $reponse->fetch($db::FETCH_ASSOC);
    }

    public function deleteUser($id){
        $db = $this->db;
        $query = $db->prepare("DELETE FROM `utilisateur` WHERE `utilisateur`.`id` =:id");
        return $query->execute(array(
            'id'=>$id
        ));
    }



    /**public function deleteEditeur($id){
    $db = $this->db;
    $query = $db->prepare("DELETE FROM `editeur` WHERE `editeur`.`idEditeur` =:id");
    return $query->execute(array(
    'id'=>$id
    ));
    }
     **/

    /** public Function NbrEditeur(){
    $db = $this->db;

    $reponse = $db->query("SELECT COUNT(*) FROM editeur");
    return $reponse->fetch($db::FETCH_ASSOC)["COUNT(*)"];
    }

    public function getLogin($email, $pass){
    $db = $this->db;
    $reponse = $this->db->query("SELECT * FROM Editeur WHERE email = '$email' AND motDePasse = '$pass'");

    // SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
    return $reponse->fetch($db::FETCH_ASSOC);
    }

    public function updateEditeur($id,$nom, $prenom, $email, $pass){
    $db = $this->db;
    $query = $db->prepare("UPDATE editeur SET nom=:nom, prenom=:prenom, email=:email, motDePasse=:pass WHERE idEditeur=:id");
    return $query->execute(array(
    'id' => $id,
    'nom' => $nom,
    'prenom' => $prenom,
    'email'=>$email,
    'pass'=>$pass,
    ));

    }**/

}