<?php
/**
 * Created by PhpStorm.
 * User: AMINE
 * Date: 02/01/2019
 * Time: 15:36
 */

namespace Models;
use Services\Connect;


class moyens
{
    private $id;
    private $immatriculation;
    private $denomination;
    private $Chantier;


    public function __construct()
    {
        $this->db = new Connect();
        $this->db = $this->db->getPdo();
    }


    public function getAllMoyens ()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM moyens");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function getMoyen($id)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM moyens WHERE id = $id");
        return $reponse->fetch($db::FETCH_ASSOC);
    }

    public function updateMoyen($id,$immatriculation,$denomination,$Chantier)
    {
        $db = $this->db;
        $query = $db->prepare("UPDATE moyens SET immatriculation= :i , denomination= :n,Chantier= :ch   WHERE moyens.id=$id");
        return $query->execute(array(
            'i' => $immatriculation,
            'n' => $denomination,
            'ch' => $Chantier,
        ));

    }

    public function ajouterMoyens ($immatriculation,$denomination,$Chantier)
    {
        $db = $this->db;
        $query = $db->prepare ("INSERT INTO moyens(immatriculation,denomination,Chantier) VALUES (:immatriculation,:denomination,:chantier)");

        return $query->execute (array(
            'immatriculation' => $immatriculation,
            'denomination' => $denomination,
            'chantier' => $Chantier,

        ));
    }

    public function deleteMoyen($id){
        $db = $this->db;
        $query = $db->prepare("DELETE FROM `moyens` WHERE `moyens`.`id` =:id");
        return $query->execute(array(
            'id'=>$id
        ));
    }

}