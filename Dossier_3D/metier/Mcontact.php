<?php
/**
 * Created by PhpStorm.
 * User: CDI14
 * Date: 28/06/2017
 * Time: 11:42
 */

class Mcontact{
    /**
     * Mcontact constructor.
     * @param $TelephoneContact
     * @param $NomContact
     * @param $PrenomContact
     * @param $idContact
     * @param $idClient
     * @param $FonctionContact
     * @param $Photo
     * @param $AdresseContact
     * @param $CommentairesContacts
     */
    public function __construct($TelephoneContact, $NomContact, $PrenomContact, $idContact, $idClient, $FonctionContact, $Photo, $AdresseContact, $CommentairesContacts)
    {
        $this->TelephoneContact = $TelephoneContact;
        $this->NomContact = $NomContact;
        $this->PrenomContact = $PrenomContact;
        $this->idContact = $idContact;
        $this->idClient = $idClient;
        $this->FonctionContact = $FonctionContact;
        $this->Photo = $Photo;
        $this->AdresseContact = $AdresseContact;
        $this->CommentairesContacts = $CommentairesContacts;
    }


    /**
     * @return mixed
     */
    public function getAdresseContact()
    {
        return $this->AdresseContact;
    }

    /**
     * @param mixed $AdresseContact
     */
    public function setAdresseContact($AdresseContact)
    {
        if(strlen($AdresseContact) <= 300){
            $this->AdresseContact = $AdresseContact;
        }

    }

    /**
     * @return mixed
     */
    public function getCommentairesContacts()
    {
        return $this->CommentairesContacts;
    }

    /**
     * @param mixed $CommentairesContacts
     */
    public function setCommentairesContacts($CommentairesContacts)
    {
        if(strlen($CommentairesContacts) <= 1000){
            $this->CommentairesContacts = $CommentairesContacts;
        }

    }

    /**
     * @return mixed
     */
    public function getTelephoneContact()
    {
        return $this->TelephoneContact;
    }

    /**
     * @param mixed $TelephoneContact
     */
    public function setTelephoneContact($TelephoneContact)
    {
        if(strlen($TelephoneContact) <= 15 && is_int($TelephoneContact)){
            $this->TelephoneContact = $TelephoneContact;
        }

    }

    /**
     * @return mixed
     */
    public function getNomContact()
    {
        return $this->NomContact;
    }

    /**
     * @param mixed $NomContact
     */
    public function setNomContact($NomContact)
    {
        if(strlen($NomContact) <= 32){
            $this->NomContact = $NomContact;
        }

    }

    /**
     * @return mixed
     */
    public function getPrenomContact()
    {
        return $this->PrenomContact;
    }

    /**
     * @param mixed $PrenomContact
     */
    public function setPrenomContact($PrenomContact)
    {
        if(strlen($PrenomContact) <= 32){
            $this->PrenomContact = $PrenomContact;
        }

    }

    /**
     * @return mixed
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * @param mixed $idContact
     */
    public function setIdContact($idContact)
    {
        $this->idContact = $idContact;
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
    public function getFonctionContact()
    {
        return $this->FonctionContact;
    }

    /**
     * @param mixed $FonctionContact
     */
    public function setFonctionContact($FonctionContact)
    {
        if(strlen($FonctionContact) <= 25){
            $this->FonctionContact = $FonctionContact;
        }

    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->Photo;
    }

    /**
     * @param mixed $Photo
     */
    public function setPhoto($Photo)
    {
        if(strlen($Photo) <= 255){
            $this->Photo = $Photo;
        }

    }

    private $TelephoneContact;
    private $NomContact;
    private $PrenomContact;
    private $idContact;
    private $idClient;
    private $FonctionContact;
    private $Photo;
    private $AdresseContact;
    private $CommentairesContacts;
}

?>