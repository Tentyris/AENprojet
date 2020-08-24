<?php


class Event
{

    private $id;

    private $nom_demandeur;

    private $prenom_demandeur;

    private $nom_service;

    private $prix;

    private $horraire_debut;

    private $horraire_fin;

    private $type;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNomDemandeur()
    {
        return $this->nom_demandeur;
    }

    /**
     * @return mixed
     */
    public function getPrenomDemandeur()
    {
        return $this->prenom_demandeur;
    }

    /**
     * @return mixed
     */
    public function getNomService()
    {
        return $this->nom_service;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @return mixed
     */
    public function getHorraireDebut()
    {
        return new DateTime($this->horraire_debut);
}

    /**
     * @return mixed
     */
    public function getHorraireFin()
    {
        return new DateTime($this->horraire_fin);
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getAccompgnant()
    {
        return $this->accompgnant;
    }

    private $date;

    private $accompgnant;




}