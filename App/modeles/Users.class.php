<?php

class User {
    private $idUser;
    private $nameUser;
    private $pswdUser;
    private $statUser;


    public function __construct(int $idUser, string $nameUser, string $pswdUser, string $statUser){
        $this->setIdUser($idUser);
        $this->setNameUser($nameUser);
        $this->setPswdUser($pswdUser);
        $this->setStatUser($statUser);
    }

    // GETTERS AND SETTERS

    public function getIdUser(){
        return $this->idUser;
    }

    public function setIdUser($idUser){
        $this->idUser = $idUser;
    }

    public function getNameUser(){
        return $this->nameUser;
    }

    public function setNameUser($nameUser){
        $this->nameUser = $nameUser;
    }

    public function getPswdUser(){
        return $this->pswdUser;
    }

    public function setPswdUser($pswdUser){
        $this->pswdUser = $pswdUser;
    }

    public function getStatUser(){
        return $this->statUser;
    }
    public function setStatUser($statUser){
        $this->statUser=$statUser;
    }
}
?>