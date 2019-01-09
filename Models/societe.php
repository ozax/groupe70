<?php


namespace Models;
use Services\Connect;



class societe
{
    private $id;
    private $raisonSociale;
    private $telephone;
    private $adresse;

    public function __construct()
    {
        $this->db = new Connect();
        $this->db = $this->db->getPdo();
    }

    public function getAllSociete ()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM societe");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function ajouterSociete($raisonSociale, $telephone,$adresse)
    {
        $db = $this->db;
        $query = $db->prepare ("INSERT INTO societe(raisonSociale,telephone, adresse ) VALUES (:raisonSociale,:telephone,:adresse)");
        return $query->execute (array(
            'raisonSociale' => $raisonSociale,
            'telephone' => $telephone,
            'adresse' => $adresse

        ));
    }

}