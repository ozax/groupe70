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

    public function getSociete($id)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM societe WHERE id = $id");
        return $reponse->fetch($db::FETCH_ASSOC);
    }

    public function updateSociete($id,$raisonSociale,$telephone,$adresse)
    {
        $db = $this->db;
        $query = $db->prepare("UPDATE societe SET raisonSociale= :rs, telephone =:t, adresse =:a  WHERE societe.id=$id");
        return $query->execute(array(

            'rs' => $raisonSociale,
            't'  => $telephone,
            'a'  => $adresse,

        ));

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

    public function deleteSociete($id){
        $db = $this->db;
        $query = $db->prepare("DELETE FROM `societe` WHERE `societe`.`id` =:id");
        return $query->execute(array(
            'id'=>$id
        ));
    }

}