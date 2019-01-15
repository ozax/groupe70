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




}