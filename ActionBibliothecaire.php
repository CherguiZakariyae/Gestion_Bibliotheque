<?php
include("Action.php");
class ActionBibliothecaire extends Action{
    public function __construct()
    {
        parent::__construct();
    }
    public function addBibliothecaire($bibliothecaire){
        $PDOBibliothecaire=parent::getService()->getPDOBibliothecaire();
        $PDOBibliothecaire->addBibliothecaire($bibliothecaire);
    }
    public function editBibliothecaire($bibliothecaire){
        $PDOBibliothecaire=parent::getService()->getPDOBibliothecaire();
        $PDOBibliothecaire->editBibliothecaire($bibliothecaire);
    }
    public function deleteBibliothecaire($id){
        $PDOBibliothecaire=parent::getService()->getPDOBibliothecaire();
        $PDOBibliothecaire->deleteBibliothecaire($id);
    }
    public function getAllBibliothecaire(){
        $PDOBibliothecaire=parent::getService()->getPDOBibliothecaire();
        return $PDOBibliothecaire->listerBibliothecaire();
    }
    public function getBibliothecaire($id){
        $PDOBibliothecaire=parent::getService()->getPDOBibliothecaire();
        return $PDOBibliothecaire->chercherBibliothecaire($id);
    }
    public function authentificationBibliothecaire($login,$password)
    {
        $PDOBibliothecaire=parent::getService()->getPDOBibliothecaire();
        return $PDOBibliothecaire->authentificationBibliothecaire($login,$password);
    }
}
