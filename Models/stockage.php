<?php
/**
 * Created by PhpStorm.
 * User: AMINE
 * Date: 10/01/2019
 * Time: 12:33
 */

namespace Models;
use Services\Connect;


class stockage
{


    private $id;
    private $denomination;
    private $lieux;
    private $quantite;
    private $entreprise;
    private $Chantier;


    public function __construct()
    {
        $this->db = new Connect();
        $this->db = $this->db->getPdo();
    }


    public function getAllStockage ()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM stockage");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function getStockage($id)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM stockage WHERE id = $id");
        return $reponse->fetch($db::FETCH_ASSOC);
    }

    public function updateStockage($id,$denomination,$lieux,$quantite,$entreprise,$Chantier)
    {
        $db = $this->db;
        $query = $db->prepare("UPDATE stockage SET denomination= :n, lieux= :l , quantite= :q, entreprise= :e, Chantier= :ch   WHERE chantier.id=$id");
        return $query->execute(array(

            'n' => $denomination,
            'l' => $lieux,
            'q' => $quantite,
            'e' => $entreprise,
            'ch' => $Chantier,
        ));

    }

    public function ajouterStockage ($denomination,$lieux,$quantite,$entreprise,$Chantier)
    {
        $db = $this->db;
        $query = $db->prepare ("INSERT INTO stockage(denomination,lieux,quantite,entreprise,Chantier) VALUES (:denomination,:lieux,:quantite,:entreprise,:chantier)");

        return $query->execute (array(
            'denomination' => $denomination,
            'lieux' => $lieux,
            'quantite' => $quantite,
            'entreprise' => $entreprise,
            'chantier' => $Chantier,

        ));
    }


    public function deleteStockage($id){
        $db = $this->db;
        $query = $db->prepare("DELETE FROM `stockage` WHERE `stockage`.`id` =:id");
        return $query->execute(array(
            'id'=>$id
        ));
    }


}