<?php
/**
 * Created by PhpStorm.
 * User: AMINE
 * Date: 14/01/2019
 * Time: 16:10
 */

namespace Models;
use Services\Connect;

class aires
{
    private $id;
    private $denomination;
    private $abreviation;
    private $Chantier;


    public function __construct()
    {
        $this->db = new Connect();
        $this->db = $this->db->getPdo();
    }


    public function getAllAires ()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM aires");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function ajouterAires ($denomination,$abreviation,$Chantier)
    {
        $db = $this->db;
        $query = $db->prepare ("INSERT INTO aires(denomination,abreviation,Chantier) VALUES (:denomination,:abreviation,:chantier)");

        return $query->execute (array(
            'denomination' => $denomination,
            'abreviation' => $abreviation,
            'chantier' => $Chantier,

        ));
    }

}