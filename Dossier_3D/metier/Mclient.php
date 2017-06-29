<?php
/**
 * Created by PhpStorm.
 * User: CDI14
 * Date: 28/06/2017
 * Time: 11:31
 */


class Client {
    /**
     * Client constructor.
     * @param $idNature
     * @param $idActivite
     * @param $idType
     * @param $RaisonSociale
     * @param $Adresse
     * @param $Telephone
     * @param $ChiffreAffaire
     * @param $Effectif
     * @param $CommentairesClients
     * @param $idClient
     */
    public function __construct($idNature, $idActivite, $idType, $RaisonSociale, $Adresse, $Telephone, $ChiffreAffaire, $Effectif, $CommentairesClients, $idClient)
    {
        $this->idNature = $idNature;
        $this->idActivite = $idActivite;
        $this->idType = $idType;
        $this->RaisonSociale = $RaisonSociale;
        $this->Adresse = $Adresse;
        $this->Telephone = $Telephone;
        $this->ChiffreAffaire = $ChiffreAffaire;
        $this->Effectif = $Effectif;
        $this->CommentairesClients = $CommentairesClients;
        $this->idClient = $idClient;
    }


    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
            $this->idClient = $idClient;

    }

    /**
     * @return mixed
     */
    public function getIdNature()
    {
        return $this->idNature;
    }

    /**
     * @param mixed $idNature
     */
    public function setIdNature($idNature)
    {
        $this->idNature = $idNature;
    }

    /**
     * @return mixed
     */
    public function getIdActivite()
    {
        return $this->idActivite;
    }

    /**
     * @param mixed $idActivite
     */
    public function setIdActivite($idActivite)
    {
        $this->idActivite = $idActivite;
    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param mixed $idType
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    /**
     * @return mixed
     */
    public function getRaisonSociale()
    {
        return $this->RaisonSociale;
    }

    /**
     * @param mixed $RaisonSociale
     */
    public function setRaisonSociale($RaisonSociale)
    {
        if(strlen($RaisonSociale) <= 32 ){
            $this->RaisonSociale = $RaisonSociale;
        }

    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * @param mixed $Adresse
     */
    public function setAdresse($Adresse)
    {
        if(strlen($Adresse) <= 500){
            $this->Adresse = $Adresse;
        }

    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * @param mixed $Telephone
     */
    public function setTelephone($Telephone)
    {
        if(is_int($Telephone) && strlen($Telephone) <= 15){
            $this->Telephone = $Telephone;
        }

    }

    /**
     * @return mixed
     */
    public function getChiffreAffaire()
    {
        return $this->ChiffreAffaire;
    }

    /**
     * @param mixed $ChiffreAffaire
     */
    public function setChiffreAffaire($ChiffreAffaire)
    {
        if($ChiffreAffaire > 0){
            $this->ChiffreAffaire = $ChiffreAffaire;
        }

    }

    /**
     * @return mixed
     */
    public function getEffectif()
    {
        return $this->Effectif;
    }

    /**
     * @param mixed $Effectif
     */
    public function setEffectif($Effectif)
    {
        if($Effectif > 0){
            $this->Effectif = $Effectif;
        }

    }

    /**
     * @return mixed
     */
    public function getCommentairesClients()
    {
        return $this->CommentairesClients;
    }

    /**
     * @param mixed $CommentairesClients
     */
    public function setCommentairesClients($CommentairesClients)
    {
        if(strlen($CommentairesClients) <= 800 ){
            $this->CommentairesClients = $CommentairesClients;
        }

    }
    private $idNature;
    private $idActivite;
    private $idType;
    private $RaisonSociale;
    private $Adresse;
    private $Telephone;
    private $ChiffreAffaire;
    private $Effectif;
    private $CommentairesClients;
    private $idClient;

}



?>
