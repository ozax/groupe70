<?php
namespace Models;
use Services\Connect;

class chantier
{
    private $id;
    private $nomChantier;
    private $adresse;

    public function __construct()
    {
        $this->db = new Connect();
        $this->db = $this->db->getPdo();
    }




    public function ajouterChantier($nomChantier, $adresse)
    {
        $db = $this->db;
        $query = $db->prepare ("INSERT INTO chantiers(nomChantier,adresse ) VALUES (:nomChantier,:adresse)");
        return $query->execute (array(
            'nomChantier' => $nomChantier,
            'adresse' => $adresse

        ));
    }

}
